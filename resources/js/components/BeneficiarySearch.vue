<template>
    <div>
        <el-table :data="beneficiaries" style="width: 100%">
            <el-table-column prop="region" label="region">
            </el-table-column>
            <el-table-column prop="province" label="province">
            </el-table-column>
            <el-table-column prop="municipality" label="municipality">
            </el-table-column>
            <el-table-column prop="barangay" label="barangay">
            </el-table-column>
            <el-table-column prop="cmunicipality_name" label="cmunicipality_name">
            </el-table-column>
            <el-table-column prop="household_id" label="household_id">
            </el-table-column>
            <el-table-column prop="entry_id" label="entry_id">
            </el-table-column>
            <el-table-column prop="firstname" label="firstname">
            </el-table-column>
            <el-table-column prop="middlename" label="middlename">
            </el-table-column>
            <el-table-column prop="lastname" label="lastname">
            </el-table-column>
            <el-table-column prop="name_of_health_center" label="name_of_health_center">
            </el-table-column>
            <el-table-column prop="count_months" label="count_months">
            </el-table-column>
            <el-table-column prop="remarks" label="remarks">
            </el-table-column>
            <el-table-column fixed="right" label="Operations" width="120">
                <template slot-scope="scope">
                    <el-button @click="handleAddCase(scope.row)" size="small">Add Case</el-button>
                </template>
            </el-table-column>
            
        </el-table>
    </div>
</template>
<script>
    export default {
        created() {

        },
        props: ['beneficiaries'],
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