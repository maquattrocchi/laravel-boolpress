<template>
    <section class="py-5">
        <div class="container" v-if="category">
            <h1 class="text-center">{{category.name}}</h1>
            <div class="row row-cols-2 row-cols-md-3" v-if="category && category.posts">
                <div class="col mb-4" v-for="post in category.posts" :key="post.id">
                    <div class="card h-100">
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
    name: 'SingleCategoryComponent',
    data(){
        return{
            category: null,
        }
    },
    created(){
        const slug = this.$route.params.slug;
        axios.get(`/api/categories/${slug}`).then((response) =>{
            this.category = response.data;
        }).catch((error)=>{
            this.$router.push({name: 'page-404'});
        })
    }
}
</script>

<style lang="scss" scoped>
.card{
    background-color: rgb(17 121 201 / 22%);
    border: none;
}
</style>