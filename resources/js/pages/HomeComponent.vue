<template>
    <section>
        <div class="container">
            <div class="title">
                <h1>Il costruttore di siti più famoso al mondo.</h1>
                <p>Il 43% dei siti web usa la tecnologia WordPress. Blogger, piccole attività e grandi aziende nella lista Fortune 500 usano WordPress più di tutte le alternative messe insieme. Unisciti ai milioni di utenti che hanno scelto WordPress.com.</p>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    name: 'HomeComponent'
}
</script>

<style lang="scss">
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