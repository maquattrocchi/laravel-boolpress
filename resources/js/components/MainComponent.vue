<template>
    <section>
        <div class="title">
            <h1>Il costruttore di siti più famoso al mondo.</h1>
            <p>Il 43% dei siti web usa la tecnologia WordPress. Blogger, piccole attività e grandi aziende nella lista Fortune 500 usano WordPress più di tutte le alternative messe insieme. Unisciti ai milioni di utenti che hanno scelto WordPress.com.</p>
        </div>
        <section class="my-5">
            <div v-for="post in posts" :key="post.id">
                <h4 class="text-center"><a href="#">{{post.title}}</a></h4>
                <p>{{post.content}}</p>
            </div>
        </section>
    </section>
</template>

<script>
export default {
    name: 'AppMain',
    data(){
        return {
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
.title{
    height: calc(100% - 80px);
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    text-align: center;
    h1{
        color: #117AC9;
        font-size: 80px;
    }
    p{
        font-size: 1.5rem;
    }
}
a{
    color: #117AC9;
}
</style>