<template>
    <section class="py-5">
        <div class="container" v-if="post">
            <div class="row mb-4" >
                <div class="col-8">
                    <h1 class="text-uppercase text-center">{{post.title}}</h1>
                    <h4 class="text-uppercase">Content</h4>
                    <p v-html="post.content"></p>
                </div>
                <div class="col-4">
                    <img v-if="post.image" :src="`/storage/${post.image}`" :alt="post.title">
                    <p class="border-bottom border-3 py-3 mb-0"><span class="info">Category:</span> {{post.category ? post.category.name : 'Not Defined'}}</p>
                        <p v-if="post.publish" class="border-bottom border-3 py-3 mb-0 text-uppercase text-success fw-bold">Published</p>
                        <p v-else class="border-bottom border-3 py-3 mb-0 text-uppercase text-danger fw-bold">To publish</p>
                    <div class="border-bottom border-3 py-3 ">
                        <p class="mb-0 info">Tags:</p>
                        <ul v-if="post.tags">
                            <li v-for="tag in post.tags" :key="tag.id">{{tag.name}}</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-8">
                    <h4>Comments</h4>
                    <div v-if="post.comments.length > 0">
                        <div class="card mb-3 w-100" v-for="comment in post.comments" :key="comment.id">
                            <div class="card-header">{{comment.user_name}}</div>
                            <div class="card-body">
                                <p class="card-text">{{comment.content}}</p>
                            </div>
                        </div>  
                    </div>
                </div>
                <div class="col-4">
                    <form @submit.prevent="addComment()" class="mb-3">
                        <h5 class="mb-0">Add New Comment</h5>
                        <input type="text" class="form-control" id="user_name" v-model="formData.user_name" placeholder="Insert User Name">
                        <textarea class="form-control" id="content" v-model="formData.content" placeholder="Insert Content" rows="5" cols="10"></textarea>
                        <button type="submit" class="btn btn-primary">Send</button>
                    </form>
                    <div>
                        <ul v-if="errors.content">
                            <li v-for="(error, index) in errors.content" :key="index" class="alert alert-danger">
                                {{error}}
                            </li>
                        </ul>
                        <ul v-if="errors.user_name">
                            <li v-for="(error, index) in errors.user_name" :key="index" class="alert alert-danger">
                                {{error}}
                            </li>
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
            formData: {
                user_name: '',
                content: '',
                post_id: '',
            },
            errors: {},
        }
    },
    methods:{
        addComment(){
            axios.post('/api/comments', this.formData).then((response)=>{
                this.post.comments.push(response.data);
                this.formData.user_name = '';
                this.formData.content = '';
            }).catch( (error)=>{
                this.errors = error.response.data.errors;    
                console.log(this.errors)        
            })
        }
    },
    created(){
        const slug = this.$route.params.slug;
        axios.get(`/api/posts/${slug}`).then((response) => {
            this.post = response.data;
            this.formData.post_id = this.post.id;
        }).catch((error)=>{
            this.$router.push({name: 'page-404'});
        })
    }
}
</script>

<style lang="scss" scoped>
    .info{
        text-transform: uppercase;
        color: #117AC9;
    }
    img{
        width: 200px;
        height: 200px;
        object-fit: cover;
    }
    form{
        border: 1px solid  #117AC9;
        border-radius: 10px;
        overflow: hidden;
        position: relative;
        h5{
            text-align: center;
            border-bottom: 1px solid  #117AC9;
            color: #117AC9;
        }
        input[type=text].form-control{
            border: none;
            border-bottom: 1px solid  #117AC9;
            border-radius: 0;
            background-color: transparent;
        }
        textarea.form-control{
            border: none;
            background-color: transparent;
        }
        .form-control:focus{
            background-color:  rgb(17 121 201 / 22%) !important;
            box-shadow: none;
        }
        .btn{
            position: absolute;
            bottom: 0;
            right: 0;
            border-radius: 10px;
        }
    }
    ul{
        list-style: none;
        padding-left: 0;
    }
    .card{
        border-color:  rgb(17 121 201 / 22%);
        .card-header{
            background-color: rgb(17 121 201 / 22%);
            border: none;
        }
    }
</style>