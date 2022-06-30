import Vue from 'vue';

import VueRouter from 'vue-router';

Vue.use(VueRouter);

import HomeComponent from './pages/HomeComponent';
import AboutComponent from './pages/AboutComponent';
import ContactsComponent from './pages/ContactsComponent';
import PostsComponent from './pages/PostsComponent';
import SinglePostComponent from './pages/SinglePostComponent';
import NotFoundComponent from './pages/NotFoundComponent';
import SingleCategoryComponent from './pages/SingleCategoryComponent'

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: HomeComponent,
        },
        {
            path: '/about',
            name: 'about',
            component: AboutComponent,
        },
        {
            path: '/contact',
            name: 'contact',
            component: ContactsComponent,
        },
        {
            path: '/posts',
            name: 'posts',
            component: PostsComponent,
        },
        {
            path: '/posts/:slug',
            name: 'single-post',
            component: SinglePostComponent,
        },
        {
            path: '/categories/:slug',
            name: 'single-category',
            component: SingleCategoryComponent,
        },
        {
            //route di fallback
            path: '*',
            name: 'page-404',
            component: NotFoundComponent,
        }
    ]
});

export default router;