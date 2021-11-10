<template>
    <div style="margin-Top:100px;">
        <h1 class="display-4 fw-bold lh-1 mb-3 right">Add Movie</h1>
        <p class="small"> to add a new movie</p>
        <div class="row">
            <div class="col-md-9">
                 <form @submit.prevent="addMovie" id="form">
                     <!-- form utilizes client side validation -->
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" name="title" placeholder="Title" minlength="2" required v-model="movie.title">
                    </div>

                    <div class="form-group">
                        <label for="plot">Plot</label>
                        <textarea class="form-control" name="plot" id="plot" placeholder="Plot" minlength="2" required v-model="movie.plot"></textarea>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-9">
                            <label for="director">Director</label>
                            <input type="text" class="form-control" name="director" placeholder="Director" minlength="2" required v-model="movie.director">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="year_released">Year</label>
                            <input type="text" class="form-control" name="year_released" placeholder="Year" minlength="4" maxlength="4" min="1800" max="2021" required v-model="movie.year_released">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group">
                            <label for="leading_actors">Leading Actors</label>
                            <input
                                type="text"
                                class="form-control"
                                name="leading_actors"
                                required
                                minlength="2"
                                maxlength="254"
                                placeholder="Leading Actors"
                                v-model="movie.leading_actors"
                            />
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-9">
                            <label for="imdb_url">IMDB URL</label>
                            <input
                                type="url"
                                class="form-control"
                                placeholder="IMDB URL"
                                required
                                minlength="2"
                                maxlength="254"
                                name="imdb_url"
                                v-model="movie.imdb_url"
                            />
                        </div>
                        <div class="form-group col-md-3">
                            <label for="imdb_score">IMDB Score</label>
                            <input
                                type="text"
                                class="form-control"
                                placeholder="IMDB Score"
                                minlength="1"
                                maxlength="3"
                                max="10"
                                min="0"
                                required
                                name="imdb_score"
                                v-model="movie.imdb_score"
                            />
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-12" style="margin-top:10px">
                            <button type="submit" class="btn btn-success">Save New Movie</button>
                        </div>
                    </div>

                </form>
            </div>
            <div class="col-md-3">
                <!-- this is just a placeholder -->
                <img src="https://i.pinimg.com/originals/e6/9c/b5/e69cb52941af06a751025eebb704be6b.jpg" height="400" width="300">
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            movie: {},
        };
    },
    methods: {
        addMovie() {
            axios
                .post("http://localhost:8000/api/movie/store", this.movie)
                .then((response) => this.$router.push({ name: "home" }))
                .catch((err) => console.log(err))
                .finally(() => (this.loading = false));
        },
    },
};
</script>
