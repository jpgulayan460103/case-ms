<template>
    <div>
        <el-table :data="beneficiaryCases" style="width: 100%">
            <el-table-column label="HHID">
                <template slot-scope="scope">
                    <span>{{scope.row.beneficiary.household_id}}</span>
                </template>
            </el-table-column>
            <el-table-column label="Name of Grantee">
                <template slot-scope="scope">
                    <span>{{ scope.row.beneficiary.firstname +" "+ scope.row.beneficiary.middlename +" "+ scope.row.beneficiary.lastname }}</span>
                </template>
            </el-table-column>
            <el-table-column label="Case Category">
                <template slot-scope="scope">
                    <span>{{ scope.row.case_category.name }}</span>
                </template>
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