<template>
    <section class="py-5">
        <div class="container">
            <h1 class="text-uppercase text-center">Posts</h1>
            <div class="row row-cols-2 row-cols-md-3" v-if="posts">
                <div class="col mb-4" v-for="post in posts" :key="post.id">
                    <div class="card h-100">
                        <img :src="`/storage/${post.image}`" alt="" v-if="post.image">
                        <img src="/img/img-placeholder.png" alt="" v-else>
                        <div class="card-body">
                            <h5 class="card-title">{{post.title}}</h5>
                            <router-link :to="{name: 'single-post', params: {slug: post.slug} }" class="btn btn-dark">View Post</router-link>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    name: 'PostsComponent',
    data(){
        return{
            posts: [],
        }
    },
    created(){
        axios.get('/api/posts').then((response)=>{
            this.posts = response.data;
        })
    }
}
</script>

<style lang="scss" scoped>
h1{
   color: #117AC9; 
}
.card{
    background-color: rgb(17 121 201 / 22%);
    border: none;
    position: relative;
    img{
        width: 100%;
        height: 300px;
        object-fit: cover;
        opacity: 0.5;
    }
    .card-body{
        position: absolute;
        bottom: 0;
        width: 100%;
        color: white;
        background-color: rgb(17 121 201 / 40%);
        text-align: center;
    }
}
</style>