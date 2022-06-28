<template>
    <main>
        <router-view></router-view>
    </main>
</template>

<script>
export default {
    name: 'MainComponent',
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