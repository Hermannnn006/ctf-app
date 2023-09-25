<template>
    <div class="flex flex-col">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                    <table class="min-w-full text-sm font-light">
                        <thead class="text-left border-b bg-gradient-to-r from-cyan-500 to-blue-500 font-medium text-white dark:border-neutral-500 dark:bg-neutral-900">
                            <tr>
                                <th class="px-6 py-4">Place</th>
                                <th class="px-6 py-4">Name</th>
                                <th class="px-6 py-4">Username</th>
                                <th class="px-6 py-4">Points</th>
                            </tr>
                        </thead>
                        <tbody v-for="(score, index) in data.scores.data" :key="score.id">
                            <tr class="border-b bg-transparent dark:border-neutral-500 dark:bg-neutral-700">
                                <td class="whitespace-nowrap px-6 py-4 text-left">{{ ++index }}</td>
                                <td class="whitespace-nowrap px-6 py-4 text-left">{{ score.name }}</td>
                                <td class="whitespace-nowrap px-6 py-4 text-left">{{ score.username }}</td>
                                <td class="whitespace-nowrap px-6 py-4 text-left">{{ score.nilai }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="flex justify-center mt-3">
                    <InfiniteLoading @infinite="load" />
                </div>
            </div>
        </div>
    </div>
</template>
                                                                                                                                
<script setup>
    import { reactive, onBeforeMount } from "vue";
    const data = reactive({
    scores: [],
    page: 2
});

const load = async $state => {
        try {
        console.log(data.scores.current_page)
        const response = await axios.get(`/scores?page=${data.scores.current_page=data.page}`);
        const json = await response.data.data;

        if(json < 10){
            $state.complete();
        } else {
            response.data.data.map(item => {
            data.scores.data.push(item);
            });
            $state.loaded();
        }
        data.page++
    } catch (error) {
        $state.error();
    }
}

  const fetchscores = async $state => {
    try {
        const response = await axios.get('/scores');
        data.scores = response.data;
    } catch (error) {
        $state.error();
    }
}

onBeforeMount(() => fetchscores());
</script>  