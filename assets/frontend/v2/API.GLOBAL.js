const API_URL = `https://api.wlin.com.vn/api/62de1bd5fcc56b09934ee278/wlin_events`
axios.interceptors.request.use(function (config) {
    $("#loading").css('display', 'inline-block');
    return config;
}, function (error) {
    $("#loading").hide();
    return Promise.reject(error);
});
axios.interceptors.response.use(function (response) {
    $("#loading").hide();
    return response;
}, function (error) {
    $("#loading").hide();
    return Promise.reject(error);
});

const SERVER = {
    get: async (url, params) => {
        try {
            const res = await axios.get(url, {
                params: {
                    access_token: '5237d862159d2cb01bfd05e4cdd5310c',
                    ...params,
                }
            });
            return res;
        } catch (e) {
            alert(e.message);
        }
    }
}
const API = {
    EVENT: {
        LIST: async (params = {page: 1}) => {
            return SERVER.get(`${API_URL}`, {
                ...params,
            });
        },
        DETAIL: async (eventId) => {
            return SERVER.get(`${API_URL}/${eventId}`);
        },
    }
}

const getDay = (time, format = 'DD/MM/YYYY') => {
    return moment(time).format(format)
}

const IMG = (path) => {
    if (!path) {
        return '/assets/frontend/img/placeholder.svg';
    }
    return `https://api.wlin.com.vn${path}`;
}

const groupBy = (items, key) => items.reduce(
    (result, item) => ({
        ...result,
        [item[key]]: [
            ...(result[item[key]] || []),
            item,
        ],
    }),
    {},
);

