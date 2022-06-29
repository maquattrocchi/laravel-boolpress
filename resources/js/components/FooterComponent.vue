<template>
    <footer class="bg-dark py-5">
        <div class="container">
            <div class="row">
                <div class="col-3">
                        <h5>Prodotti</h5> 
                    <ul>
                        <li><a href="/">Hosting WordPress</a></li>
                        <li><a href="/">Nomi di dominio</a></li>
                        <li><a href="/">Costruttore di siti web</a></li>
                        <li><a href="/">Crea un blog</a></li>
                        <li><a href="/">Professional Email</a></li>
                        <li><a href="/">P2: WordPress per team</a></li>
                        <li><a href="/">Soluzioni Enterprise</a></li>
                        <li><a href="/">Costruito con WordPress.com</a></li>
                    </ul>
                </div>
                <div class="col-3">
                    <h5>Funzionalità</h5>
                    <ul>
                        <li><a href="/">Panoramica</a></li>
                        <li><a href="/">Temi WordPress</a></li>
                        <li><a href="/">Plugin WordPress</a></li>
                        <li><a href="/">Google Apps</a></li>
                    </ul>
                </div>
                <div class="col-3">
                    <h5>Risorse</h5>
                    <ul>
                        <li><a href="/">Supporto WordPress.com</a></li>
                        <li><a href="/">I forum di WordPress</a></li>
                        <li><a href="/">Novità di WordPress</a></li>
                        <li><a href="/">Suggerimenti per il tuo sito</a></li>
                        <li><a href="/">Generatore di nomi commerciali</a></li>
                        <li><a href="/">Costruttore di loghi</a></li>
                        <li><a href="/">Webinar giornalieri</a></li>
                        <li><a href="/">Corsi WordPress</a></li>
                        <li><a href="/">Risorse per gli sviluppatori</a></li>
                    </ul>
                </div>
                <div class="col-3">
                    <h5>Società</h5>
                    <ul>
                        <li><a href="/">Info</a></li>
                        <li><a href="/">Fornitori</a></li>
                        <li><a href="/">Stampa</a></li>
                        <li><a href="/">Termini di servizio</a></li>
                        <li><a href="/">Informativa sulla privacy</a></li>
                        <li><a href="/">Non inviare le mie informazioni personali</a></li>
                        <li><a href="/">Nota sulla privacy per utenti in California</a></li>
                    </ul>
                </div>
            </div>
            <div class="row justify-content-end mt-3">
                <div class="col-3">
                    <a href="/"><i class="fa-brands fa-twitter"></i></a>
                    <a href="/"><i class="fa-brands fa-facebook"></i></a>
                    <a href="/"><i class="fa-brands fa-instagram"></i></a>
                    <a href="/"><i class="fa-brands fa-youtube"></i></a>
                </div>
                <div class="col-3">
                    <select name="language" id="language">
                        <option value="italiano">Italiano</option>
                        <option value="spagnolo">Spagnolo</option>
                        <option value="inglese">Inglese</option>
                    </select>
                </div>
            </div>
        </div>
    </footer>
</template>

<script>
export default {
    name:'FooterComponent',
}
</script>

<style lang="scss" scoped>
footer{
    h5{
        color: #fff;
    }
    ul{
        list-style: none;
        padding-left: 0 !important;
        a{
            color: rgba(255, 255, 255, 0.75);
            text-decoration: underline;
            &:hover{
                color: #fff;
            }
        }
    }
}
.col-3{
    a{
        color: rgba(255, 255, 255, 0.75);
        font-size: 1.3rem;
        margin-right: 1rem;
        &:hover{
            color: #fff;
        }
    }
    select{
        width: 100%;
        background-color: #343a40;
        color: rgba(255, 255, 255, 0.75);
        padding: 0.5rem;
        border-radius: 10px;
        font-size: 1rem;
    }
}
</style>