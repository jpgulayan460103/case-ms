<template>
    <div>
        <el-form ref="form" :model="form">
            <el-form-item label="HHID" :error="hasError('id',true)">
                <b>
                    <span v-if="form.household_id">
                        {{ `${form.household_id}` }}
                    </span>
                </b>
            </el-form-item>
            <el-form-item label="Name" :error="hasError('id',true)">
                <b>
                    <span v-if="form.household_id">
                        {{ `${form.firstname} ${form.middlename} ${form.lastname}` }}
                    </span>
                </b>
            </el-form-item>
            <el-form-item label="Case Category" :error="hasError('case_category_id',true)">
                <el-select style="width: 100%" v-model="form.case_category_id" placeholder="Select Case Category" @change="handleFilters" clearable filterable>
                    <el-option v-for="item in caseCategories" :key="item.id" :label="item.name" :value="item.id">
                    </el-option>
                </el-select>
            </el-form-item>
            <el-form-item label="Reason(Based on Category)" :error="hasError('reason',true)">
                <el-input type="textarea" autosize v-model="form.reason" placeholder="Reason(Based on Category)"></el-input>
            </el-form-item>
            <el-form-item label="C/MLs/CFs Interventions" :error="hasError('intervention',true)">
                <el-input type="textarea" autosize v-model="form.intervention" placeholder="C/MLs/CFs Interventions"></el-input>
            </el-form-item>
            <el-form-item label="SWOIIIs Remarks" :error="hasError('remarks',true)">
                <el-input type="textarea" autosize v-model="form.remarks" placeholder="SWOIIIs Remarks"></el-input>
            </el-form-item>
            <el-button type="primary" @click="addCase" style="width: 100%">Add Case</el-button>

        </el-form>
    </div>
</template>
<script>
    import { formMixin } from "./../mixins/formMixin"
    export default {
        created() {
            this.form = this.formData;
        },
        mixins: [formMixin],
        props: ['caseCategories','formData'],
        data() {
            return {
                form:{},
                filters:{},
                provinceOptions: [],
                cmunicipalityOptions: [],
                barangayOptions: [],
                caseCategoryOptions: [
                    {
                        value: "",
                        label: "",
                    }
                ],
            }
        },
        methods: {
            addCase(){
                this.formErrors = {};
                this.$API.BeneficiaryCase.add(this.formData)
                .then(res => {
                    // this.fileToImport(res.data.filename);
                    this.formErrors = {};
                    this.$EventDispatcher.fire('ADD_CASE_BENEFICIARY', {});
                    location.reload();
                })
                .catch(err => {
                    this.formErrors = err.response.data;
                })
                .then(err => {

                });
            },
            handleFilters(){

            },
        },

        watch: {
            formData(){
                this.form = this.formData;
            }
        },
    }
</script>
<style scoped>
</style>