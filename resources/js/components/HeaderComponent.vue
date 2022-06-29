<template>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <router-link :to="{name: 'home'}" class="navbar-brand">Boolpress</router-link>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li v-for="(item, index) in menuItem" :key="index">
                        <router-link :to="{name: item.routeName}" class="nav-link">{{item.label}}</router-link>
                    </li>
                </ul>
                <div class="navbar-nav">
                    <a href="/admin" class="nav-link">Area Riservata</a>
                </div>
            </div>
        </nav>
    </header>
</template>

<script>
export default {
    name:'HeaderComponent',
    data(){
        return{
            menuItem: [
                {
                    label: 'Posts',
                    routeName: 'posts'
                },
                {
                    label: 'About',
                    routeName: 'about'
                },
                {
                    label: 'Contact',
                    routeName: 'contact'
                }
            ]
        }
    }
}
</script>

<style lang="scss">

</style>