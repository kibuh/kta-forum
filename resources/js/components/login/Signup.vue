<template>
    <v-container>
        <v-form @submit.prevent="signup">

            <v-text-field
            v-model="form.name"
            label="Name"
            type="text"
            
            ></v-text-field>
            <span class="red--text" v-if="errors.name">Error</span>
            
            <v-text-field
            v-model="form.email"
            label="E-mail"
            type="email"
            
            ></v-text-field>

            <v-text-field
            v-model="form.password"
            label="Password"
            type="password"
        
            ></v-text-field>

            <v-text-field
            v-model="form.password_confirmation"
            label="Password confirmation"
            type="password"
            
            ></v-text-field>

            <v-btn 
            color="green"
            type="submit"
            >Sign up</v-btn>

            <router-link  to="/login" >
             <v-btn  color="blue" >Login</v-btn>
            </router-link>
        
        </v-form>
    </v-container>
</template>

<script>
export default {
    data(){
        return{
            form:{
                name:null,
                email:null,
                password:null,
                password_confirmation:null
            },
            errors:{}
        }
    },
    methods:{
        signup(){
            axios.post('/api/auth/signup',this.form)
            .then(res => User.responseAfterLogin(res))
            .catch(error=>this.errors = error.response.data.errors)
        }
    }
}
</script>

<style>

</style>
