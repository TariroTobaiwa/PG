<template>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse">
                <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
                    <router-link to="/" class="nav-item nav-link"><font-awesome-icon icon="plus-list" />  Movies List</router-link>
                    <router-link to="/create" class="nav-item nav-link"><font-awesome-icon icon="plus-square" />  Add Movie</router-link>
                </div>
            </div>
        </nav>
        <router-view></router-view>
    </div>
</template>

<script>
    import AllMovies from '../components/AllMovies.vue';
    import NewMovie from '../components/NewMovie.vue';
    import UpdateMovie from '../components/UpdateMovie.vue';
    export default {
        components:{
            AllMovies,
            NewMovie,
            UpdateMovie
        }
    }
</script>
