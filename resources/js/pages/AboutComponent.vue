<template>
    <section>
        <div class="container">
            <div class="title py-5">
                <p class="text-center text-uppercase">Chi siamo</p>
                <h1>La missione di WordPress.com è rendere più democratici pubblicazione ed eCommerce.</h1>
                <p>Siamo una versione ospitata del software open source WordPress. Perché quando si è liberi di creare, esprimersi e guadagnare online, l’impossibile diventa normale.</p>
            </div>
        </div>
        <section id="crediamo" class="py-5">
            <div class="container">
                <div class="w-75">
                    <p>In cosa crediamo</p>
                    <h2 class="mb-5">Tutti possono avere idee. Vogliamo darti la possibilità e il supporto per realizzarle online.</h2>
                    <img src="	https://assets.a8c.now.sh/static/about/logos-better-web.svg" alt="">
                    <h6>Prodotti migliori per un web migliore.</h6>
                    <p>Cerchiamo di creare un web migliore. Un Internet che tu possa usare con serenità. Un luogo d’incontro libero per persone e idee.</p>
                </div>
                <div class="row mt-5">
                    <div class="col-12 col-lg-6">
                        <div class="card">
                            <img class="card-img-top" src="https://assets.a8c.now.sh/static/about/people-hilde-lysiak.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Tutti hanno una voce.</h5>
                                <p class="card-text">Le idee non dovrebbero essere tenute nascoste. E nemmeno i tuoi software e articoli. Siamo qui per aiutarti a esprimerti.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="card">
                            <img class="card-img-top" src="https://assets.a8c.now.sh/static/about/people-happiness.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Un supporto vero con persone vere.</h5>
                                <p class="card-text">Il servizio clienti non è una cosa che offriamo. Ma è ciò che siamo. Lo chiamiamo Happiness: supporto autentico con persone in carne e ossa.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="card">
                            <img class="card-img-top small" src="https://assets.a8c.now.sh/static/gridicons-white/institution.svg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Libertà e proprietà.</h5>
                                <p class="card-text">Puoi creare il blog, il negozio o il portfolio dei tuoi sogni. I contenuti e i dati restano esclusivamente di tua proprietà.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="card">
                            <img class="card-img-top small" src="https://assets.a8c.now.sh/static/gridicons-white/star.svg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Puoi creare l’incredibile.</h5>
                                <p class="card-text">Con semplici strumenti che ti permettono di progettare il tuo sito, ospitarlo in tutta sicurezza e trovare il tuo pubblico, il tuo sito crescerà con te.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
</template>

<script>
export default {
    name: 'AboutComponent'
}
</script>

<style lang="scss" scoped>
#crediamo{
    background-color: #044B7A;
    color: white;
    font-size: 1.2rem;
    h2{
        font-size: 2.8rem;
    }
    h6{
        font-size: 1.4rem;
    }
    p:first-of-type{
        color: #91CAF2;
        text-transform: uppercase;
    }
    p:last-of-type{
        color: #BBE0FA;
    }
    img{
        width: 300px;
    }
    .card{
        background-color: transparent;
        border: none;
        .card-body{
            padding-left: 0;
            h5{
                color: #fff
            }
            p{
                text-transform: none;
            }
        }
        .card-img-top{
            height: 150px;
            width: 250px;
            object-fit: cover;
            &.small{
                width: 50px;
                height: 50px;
            }
        }
    }
}
</style>