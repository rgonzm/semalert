import api from 'axios';

const token = document.querySelector("meta[name='api-token']").getAttribute('content');

api.defaults.headers.common = {
    'Authorization': `Bearer ${token}`,
    'Accept': 'application/json',
};

export default api;
