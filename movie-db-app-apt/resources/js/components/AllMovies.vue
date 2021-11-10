<template>
    <div class="mt-20">
        <h1 class="display-4 fw-bold lh-1 mb-3 right">Blockbuster Movies</h1>
        <p class="sm">Your choice for quality entertainment</p>
        <table class="table mt-50">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Plot</th>
                    <th>Year</th>
                    <th>Director</th>
                    <th>Actors</th>
                    <th>IMDB</th>
                    <th>IMDB Score</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="movie in movies" :key="movie.id">
                    <td class="small">{{ movie.title }}</td>
                    <td class="small">{{ movie.plot }}</td>
                    <td class="small">{{ movie.year_released }}</td>
                    <td class="small">{{ movie.director }}</td>
                    <td class="small">{{ movie.leading_actors }}</td>
                    <td class="small">{{ movie.imdb_url }}</td>
                    <td class="small">{{ movie.imdb_score }}</td>
                    <td>
                        <div class="btn-group" role="group">
                            <router-link
                                :to="{
                                    name: 'edit',
                                    params: { id: movie.id },
                                }"
                                class="btn btn-success btn-sm"
                                >Edit</router-link
                            >
                            <button
                                class="btn btn-danger btn-sm"
                                @click="deletemovie(movie.id)"
                            >
                                Delete
                            </button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
export default {
    data() {
        return {
            movies: [],
        };
    },
    created() {
        axios.get("http://localhost:8000/api/movies/").then((response) => {
            this.movies = response.data;
        });
    },
    methods: {
        deletemovie(id) {
            axios
                .delete(`http://localhost:8000/api/movie/${id}`)
                .then((response) => {
                    let i = this.movies.map((data) => data.id).indexOf(id);
                    this.movies.splice(i, 1);
                });
        },
    },
};
</script>
