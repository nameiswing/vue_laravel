import './bootstrap';
import { createApp } from 'vue';
import { createStore } from 'vuex';
import routes from './routes';
import axios from 'axios';
import VueAxios from 'vue-axios';
import Main from './Main';

//sets axios base URL to whatever host you're running
axios.defaults.baseURL = process.env.BASE_URL;

const app = createApp(Main);

const store = createStore({
    state: {
        counter: 0
    },
    mutations: {
        incrementCounter(state, payload) {
            state.counter += payload ?? 1;
        },
        resetCounter(state) {
            state.counter = 0;
        },

    }
})

app.use(routes);
app.use(store);
app.use(VueAxios, axios);

app.mount('#app');
