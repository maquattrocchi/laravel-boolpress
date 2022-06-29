<template>
    <div class="container">
        <div class="w-80">
            <h1>Page Not Found | 404</h1>
            <p>The page you were looking for could not be found. It might have been removed, renamed, or did not exist in the first place.</p>
        </div>
    </div>
</template>

<script>
export default {
    name: 'NotFoundComponent'
}
</script>

<style lang="scss" scoped>
    .container{
        display: flex;
        justify-content: center;
        align-items: center;
        height: calc(100vh - 71px);
        h1{
            font-size: 60px;
            text-align: center;
        }
        p{
            font-size: 1.5rem;
        }
    }
</style>