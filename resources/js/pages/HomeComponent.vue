<template>
    <section class="py-5">
        <div class="container" v-if="categories">
            <div class="row">
                <div class="col-10">
                    <div id="slider" class="w-100" v-if="posts">
                        <div class="cs-item">
                            <img :src="`/storage/${posts[currentIndexActive].image}`" :alt="posts[currentIndexActive].title"/>
                            <div id="iPrev" class="prev bg-dark" @click="prevSlide">
                                <i class="fa-solid fa-chevron-left"></i>
                            </div>
                            <div id="iNext" class="next bg-dark" @click="nextSlide">
                                <i class="fa-solid fa-chevron-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item" v-for="(category, index) in categories" :key="index">
                            <router-link :to="{name: 'single-category', params: {slug: category.slug} }" >{{category.name}}</router-link>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    name: 'HomeComponent',
    data(){
        return{
            categories: [],
            posts: [],
            currentIndexActive: 0,
        }
    },
    methods:{
        nextSlide(){
           this.currentIndexActive === 2 ? this.currentIndexActive = 0 : this.currentIndexActive++
        },
        prevSlide(){
            this.currentIndexActive === 0 ? this.currentIndexActive = 2 : this.currentIndexActive--
        },
    },
    created(){
        axios.get('/api/categories').then((response)=>{
            this.categories = response.data;
        }).catch((error)=>{
            console.log(error)
        })

        axios.get('/api/posts').then((response)=>{
            this.posts = response.data.slice(0, 3);
            console.log(this.posts)
        }).catch((error)=>{
            console.log(error)
        })
    }
}
</script>

<style lang="scss">
.list-group-item{
    background-color: transparent;
    a{
        color: black;
        font-size: 1rem;
    }
}
#slider{
    height: 400px;
    .cs-item{
        position: relative;
        width: 100%;
        height: 100%;
        color: white;
        img{
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        h2{
            padding: 1rem 0;
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
        }
        .prev,
        .next{
            cursor: pointer;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            padding: 10px;
            font-size: 20px;
        }
        .next{
            right: 0;
        }
    }
}
</style>