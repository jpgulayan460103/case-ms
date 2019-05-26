<template>
    <div class="row">
        <div class="col-md-2 col-sm-12">
            <case-add-form :case-categories="caseCategories" :form-data="caseAddFormData"></case-add-form>
        </div>
        <div class="col-md-10 col-sm-12">
            <beneficiary-search :beneficiaries="beneficiaries"></beneficiary-search>
        </div>
        <div class="col-md-12 col-sm-12">
            <beneficiary-case :beneficiary-cases="beneficiaryCases"></beneficiary-case>
        </div>
    </div>
</template>
<script>
    import CaseAddForm from "./CaseAddForm";
    import CaseSearch from "./CaseSearch";
    import BeneficiarySearch from "./BeneficiarySearch";
    import BeneficiaryCase from "./BeneficiaryCase";
    export default {
        created() {
            this.$EventDispatcher.listen('ADD_CASE_BENEFICIARY', (beneficiary) => {
                this.caseAddFormData = beneficiary;
            });

        },
        props:['caseCategories','beneficiaries','beneficiaryCases'],
        components: {
            'case-add-form': CaseAddForm,
            'case-search': CaseSearch,
            'beneficiary-search': BeneficiarySearch,
            'beneficiary-case': BeneficiaryCase,
        },
        data() {
            return {
                caseAddFormData: {},
            }
        },
        methods: {

        }
    }
</script>
<style scoped>
</style>