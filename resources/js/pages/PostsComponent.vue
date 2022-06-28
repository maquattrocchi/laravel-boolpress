<template>
    <section>
        <div class="container">
            <h1 class="text-uppercase text-center">Posts</h1>
            <div class="row row-cols-2 row-cols-md-3" v-if="posts">
                <div class="col mb-4" v-for="post in posts" :key="post.id">
                    <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">{{post.title}}</h5>
                        <router-link :to="{name: 'single-post', params: {slug: post.slug} }" class="btn btn-info">View Post</router-link>
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

<style lang="scss">
h1{
   color: #117AC9; 
}
</style>