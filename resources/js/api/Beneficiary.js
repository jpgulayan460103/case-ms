import axios from 'axios'
import _cloneDeep from 'lodash/cloneDeep'

export default {

    getList(formData) {
        return axios.get(route('api.beneficiary.index'),{
            params: formData
        });
    },
    getAreas(formData) {
        return axios.get(route('api.beneficiary.areas'),{
            params: formData
        });
    },
    statistics(formData) {
        return axios.get(route('api.beneficiary.statistics'),{
            params: formData
        });
    },
    findById(id) {
        return axios.get(route('api.beneficiary.show',[id]));
    },
    findByUctId(id) {
        return axios.get(route('api.beneficiary.uctid.show',[id]));
    },
    importData(beneficiary, uctType, columns, importOptions){
        return axios.post(route('api.beneficiary.import'), {
            beneficiaries: beneficiary,
            columns: columns,
            uctType: uctType,
            importOptions: importOptions
        });
    },
    exportStatistics(exportData, tableHeaders){
        return axios.post(route('api.beneficiary.statistics.export'),{
            exportData: exportData,
            tableHeaders: tableHeaders,
        });
    },
    importFile(formData){
        return axios.post(route('api.beneficiary.fileimport'), formData);
    },
    update(formData, showLbpForm) {
        formData.hasLbp = showLbpForm;
        return axios.put(route('api.beneficiary.update', [formData.id]), formData);
    },
    createExport(formData) {
        return axios.post(route('api.beneficiary.export', ['create']), formData);
    },
    writeExport(formData) {
        return axios.post(route('api.beneficiary.export', ['write']), formData);
    },

    showLogs(formData) {
        return axios.get(route('api.beneficiary.logs.show'), {
            params: formData
        });
    },
    showEdits(id) {
        return axios.get(route('api.beneficiary.edit-history',[id]));
    },
    showLogsStatistics(formData) {
        return axios.get(route('api.beneficiary.logs.statistics.user'), {
            params: formData
        });
    },
    showLogsStatisticsUser(formData, user_id) {
        return axios.get(route('api.beneficiary.logs.statistics.user',[user_id]), {
            params: formData
        });
    },

    getImportFile(filename){
        return axios.post(route('api.beneficiary.extract', [filename]));
    }

}