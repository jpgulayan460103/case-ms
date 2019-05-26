<template>
    <div>
        <el-table :data="beneficiaryCases" style="width: 100%">
            <el-table-column prop="beneficiary_id" label="Case Category">
            </el-table-column>
            <el-table-column prop="case_category_id" label="Case Category">
            </el-table-column>
            <el-table-column prop="reason" label="Reason(Based on Category)">
            </el-table-column>
            <el-table-column prop="intervention" label="C/MLs/CFs Interventions">
            </el-table-column>
            <el-table-column prop="remarks" label="SWOIIIs Remarks">
            </el-table-column>
            
        </el-table>
    </div>
</template>
<script>
    export default {
        created() {

        },
        props: ['beneficiaryCases'],
        data() {
            return {

            }
        },
        methods: {
            handleAddCase(beneficiary){
                let passData = {
                    household_id: beneficiary.household_id,
                    firstname: beneficiary.firstname,
                    middlename: beneficiary.middlename,
                    lastname: beneficiary.lastname,
                    beneficiary_id: beneficiary.id,
                };
                this.$EventDispatcher.fire('ADD_CASE_BENEFICIARY', passData);
            },
        }
    }
</script>
<style scoped>
</style>