<template>
    <nav class="w-full flex justify-between bg-white shadow px-2 py-3">
        <section class="flex items-center">
            <button>
                <img src="/img/icons/MenuLines.png " alt="hambuerger menu">
            </button>
            <a class="uppercase font-mono text-purple-600 px-2 " href="/">
                {{ config.name }}
            </a>
        </section>
        <ul class="flex justify-around items-center">
            <li class="pl-2 hover:underline hover:text-purple-600 text-sm" v-if='!user'>
                <a href="/login "> Login </a>
            </li>
            <li class="pl-2 hover:underline hover:text-purple-600 text-sm" v-if='!user && canRegister'>
                <a href="/register"> Register </a>
            </li>
            <li class="pl-2 hover:underline hover:text-purple-600 text-sm" v-if='user'>
                <a>
                    @{{ user.name }}
                    <img src="/img/icons/ChevronDown2x.png" alt="down Chevron">
                </a>
            </li>
        </ul>
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
