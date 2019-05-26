import axios from 'axios'
import _cloneDeep from 'lodash/cloneDeep'

export default {
    add(beneficiary){
        return axios.post('api/case', beneficiary);
    },

    update(formData, showLbpForm) {
        formData.hasLbp = showLbpForm;
        return axios.put(route('api.beneficiary.update', [formData.id]), formData);
    },


    showLogs(formData) {
        return axios.get(route('api.beneficiary.logs.show'), {
            params: formData
        });
    },


}