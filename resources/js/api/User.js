import axios from 'axios'
import _cloneDeep from 'lodash/cloneDeep'

export default {

    getList(formData) {
        return axios.get(route('api.user.index'),{
            params: formData
        });
    },
    statistics(formData) {
        return axios.get(route('api.user.statistics'),{
            params: formData
        });
    },
    findById(id) {
        return axios.get(route('api.user.show',[id]));
    },
    update(formData) {
        return axios.put(route('api.user.update', [formData.id]), formData);
    },
    updatePassword(formData) {
        return axios.put(route('api.user.update-password', [auth.id]), formData);
    },
    store(formData) {
        return axios.post(route('api.user.store'), formData);
    }

}