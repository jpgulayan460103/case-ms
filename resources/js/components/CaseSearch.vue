<template>
    <div>
        <el-form ref="form" :model="form" label-width="120px">
            <el-form-item label="Province">
                <el-select v-model="filters.province" placeholder="Select Province" @change="handleFilters" clearable filterable>
                    <el-option v-for="item in provinceOptions" :key="item.value" :label="item.label" :value="item.value">
                    </el-option>
                </el-select>
            </el-form-item>
            <el-form-item label="City/Municipality">
                <el-select v-model="filters.cmunicipality" placeholder="Select Province" @change="handleFilters" clearable filterable>
                    <el-option v-for="item in cmunicipalityOptions"  :key="item.value" :label="item.label" :value="item.value">
                    </el-option>
                </el-select>
            </el-form-item>
            <el-form-item label="Barangay">
                <el-select v-model="filters.barangay" placeholder="Select Province" @change="handleFilters" clearable filterable>
                    <el-option v-for="item in barangayOptions" :key="item.value" :label="item.label" :value="item.value">
                    </el-option>
                </el-select>
            </el-form-item>
            <el-form-item label="Case Category">
                <el-select v-model="filters.caseCategory" placeholder="Select Case Category" @change="handleFilters" clearable filterable>
                    <el-option v-for="item in caseCategories" :key="item.id" :label="item.name" :value="item.id">
                    </el-option>
                </el-select>
            </el-form-item>

        </el-form>
    </div>
</template>
<script>
    export default {
        created() {

        },
        props: ['caseCategories'],
        data() {
            return {
                form:{
                    name: '',
                    region: '',
                    date1: '',
                    date2: '',
                    delivery: false,
                    type: [],
                    resource: '',
                    desc: ''
                },
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
            handleFilters(){
                
            },
        }
    }
</script>
<style scoped>
</style>