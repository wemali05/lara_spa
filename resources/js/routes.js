import Logo from './components/Logo';
import LogoSybmol from './components/LogoSymbol';
import Colors from './components/Colors';
import Illustrations from './components/Illustrations';
import LoadersAndAnimation from './components/LoadersAndAnimation';
import Mascot from './components/Mascot';
import Wallpapers from './components/Wallpapers';
import Typography from './components/Typography';

export default {
    mode: 'history',

    linkActiveClass: 'font-bold',

    routes: [{
            path: '/',
            component: Logo
        },
        {
            path: '/logo-symbol',
            component: LogoSybmol
        },
        {
            path: '/colors',
            component: Colors
        },
        {
            path: '/illustrations',
            component: Illustrations
        },
        {
            path: '/loaders-and-animation',
            component: LoadersAndAnimation
        },
        {
            path: '/mascot',
            component: Mascot
        },
        {
            path: '/wallpapers',
            component: Wallpapers
        },
        {
            path: '/typography',
            component: Typography
        }
    ]
};
