<template>
    <section>
        <h1>{{titolo}}</h1>
        <p>Il 43% dei siti web usa la tecnologia WordPress. Blogger, piccole attività e grandi aziende nella lista Fortune 500 usano WordPress più di tutte le alternative messe insieme. Unisciti ai milioni di utenti che hanno scelto WordPress.com.</p>
    </section>
</template>

<script>
export default {
    name: 'AppMain',
    data(){
        return {
            'titolo': 'Il costruttore di siti più famoso al mondo.'
        }
    },
}
</script>

<style lang="scss" scoped>

    h1{
        color: #117AC9;
        font-size: 80px;
    }
    p{
        font-size: 1.5rem;
    }
</style>