import AllMovies from './components/AllMovies';
import NewMovie from './components/NewMovie';
import UpdateMovie from './components/UpdateMovie';

export const routes = [
  {
    name: 'home',
    path: '/',
    component: AllMovies
  },
  {
    name: 'create',
    path: '/create',
    component: NewMovie
  },
  {
    name: 'edit',
    path: '/edit/:id',
    component: UpdateMovie
  }
];
