<template>
<div>
<h2>table</h2>
    <table class="table table-active">
        <thead>
            <tr >
                <th>Full Name</th>
                <th> Age</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="item in data" :key="item.id">
               <td>{{item.name}}</td>
               <td>{{item.age}}</td>
               <td></td>
            </tr>
        </tbody>
    </table>
    </div>
</template>
<script>
export default {
mounted(){
    axios.get('api/student').then(response =>{
       this.data=response.data;
    });
 }
,data:function(){
    return{
        data:null,
    }
}
}
</script>

<style scoped>
/* th{
    background-color: aqua;
} */
</style>

