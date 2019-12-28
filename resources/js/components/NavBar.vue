<template>
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="/">
                    {{ config.name }}
                </a>
                <button>
                    <img src="/img/icons/MenuLines2x.png " alt="hambuerger menu">
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <li v-if='!user'>
                            <a class="nav-link" href="/login "> Login </a>
                        </li>
                        <li v-if='!user && canRegister'>
                            <a class="nav-link" href="/register"> Register </a>
                        </li>
                        <li v-if='user'>
                            <a>
                                @{{ user.name }}
                                <img src="/img/icons/ChevronDown2x.png" alt="down Chevron">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
</template>

<script>
export default {
    name: 'NavBar',
    data() {
        return {
            user: null,
            canRegister: true,
        }
    },
    computed: {
        config () {
            return {
                name: 'sandwich',
                assets: '/',
                url: '/',
                route: '/'
            }
        }
    },
}
</script>
