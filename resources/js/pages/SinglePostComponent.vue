<template>
    <section>
        <div class="container">
            <div class="row mb-4">
                <div class="col-8">
                    <h1 class="text-uppercase text-center">{{post.title}}</h1>
                    <h4 class="text-uppercase">Content</h4>
                    <p>{{post.content}}</p>
                </div>
                <div class="col-4">
                    <img v-if="post.image" :src="`/storage/${post.image}`" :alt="post.title" class="w-100">
                    <p class="border-bottom border-3 py-3 mb-0">Category: {{post.category ? post.category.name : 'Not Defined'}}</p>
                        <p v-if="post.publish" class="border-bottom border-3 py-3 mb-0 text-uppercase text-success fw-bold">Published</p>
                        <p v-else class="border-bottom border-3 py-3 mb-0 text-uppercase text-danger fw-bold">To publish</p>
                    <div class="border-bottom border-3 py-3 ">
                        <p class="mb-0">Tags:</p>
                        <ul v-if="post.tags">
                            <li v-for="tag in post.tags" :key="tag.id">{{tag.name}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    name: 'SinglePostComponent',
    data(){
        return{
            post: null,
        }
    },
    created(){
        const slug = this.$route.params.slug;
        axios.get(`/api/posts/${slug}`).then((response) => {
            this.post = response.data;
        })
    }
}
</script>

<style lang="scss">

</style>