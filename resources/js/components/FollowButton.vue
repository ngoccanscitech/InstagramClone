<template>
    <div>
         <button class="btn btn-primary ml-4" @click="followUser">Follow</button>
    </div>
</template>

<script>
import Axios from 'axios'
    export default {
        
        mounted() {
            console.log('Component mounted.')
        },
        data:function(){
            return{
                status: this.follows
            }
        },
       methods: {
           followUser(){
               axios.post('/follow/1')
               .then(response => {
               alert(response.data);
           })
           }
           
       },
        computed:{
            buttonText(){
                return (this.status) ? 'Unfollow' : 'Follow';
            }
        }
    }
</script>
