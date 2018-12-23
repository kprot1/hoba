<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{mix('/css/app.css')}}">
    <script src="{{mix('js/app.js')}}"></script>
    <title>Document</title>
</head>
<body>


    <section id="vue_app">
        <input type="text" v-model="filterInput" class="vue-ads-cursor-pointer">
        <div id="app" class="m-6">
            <div class="mb-6">
                <vue-ads-table-tree
                    :columns="columns"
                    :rows="rows"
                    :filter="filterValue"
                    :classes="classes"
                    :totalRows="1"
                    :async="asyncCall"
                >
                    <template slot="title">
                        <h2 class="leading-loose font-bold uppercase">
                            Табличка тестовая
                        </h2>
                    </template>
                    <template slot="filter">
                        <span>Фильтрация: </span>
                        <input
                            v-model="filterValue"
                            class="appearance-none border py-2 px-3"
                            type="text"
                            placeholder="Filter..."
                        >
                    </template>
                </vue-ads-table-tree>
            </div>
        </div>
    </section>


</body>
</html>

<script>
    const VueAdsTableTree = window.VueAdsTableTree.default;
    const axios = window.axios;

    new Vue({
        el: '#vue_app',
        components: {
            VueAdsTableTree
        },
        data: {
            filterInput: '1',
            filterValue: '',
            useCache: true,
            classes: {
                table: {
                    'vue-ads-border': true,
                    'vue-ads-w-full': true,
                },
                info: {
                    'vue-ads-text-center': true,
                    'vue-ads-py-6': true,
                    'vue-ads-text-sm': true,
                },
                'all/': {
                    'hover:vue-ads-bg-grey-lighter': true,
                },
                'even/': {
                    'vue-ads-bg-grey-lightest': true,
                },
                'odd/': {
                    'vue-ads-bg-white': true,
                },
                '0/': {
                    'vue-ads-bg-grey-lightest': false,
                    'hover:vue-ads-bg-grey-lighter': false,
                },
                '0_-1/': {
                    'vue-ads-border-b': true,
                },
                '/0_-1': {
                    'vue-ads-border-r': true,
                },
            },
            columns: [
                {
                    property: 'firstName',
                    title: 'Имя',
                    sortable: true,
                    filterable: true,
                },
                {
                    property: 'secondName',
                    title: 'Фамилия',
                    filterable: true,
                    sortable: true,
                },
            ],
            rows: [
                {
                    'firstName': 'Jinglse1',
                    'secondName': 'Hoba1'
                },
                {
                    'firstName': 'Jinglse2',
                    'secondName': 'Hoba2',
                    'hasChildren': true
                },
                {
                    'firstName': 'Jinglse1',
                    'secondName': 'Hoba1'
                },
                {
                    'firstName': 'Jinglse1',
                    'secondName': 'Hoba1',
                    'hasChildren': true
                },
            ],
        },
        methods: {
            async asyncCall (filter, sortColumns, start, end, parent) {
                let startRows = [];
                if (parent) {
                    this.findChild();
                    await this.sleep(1000);
                    startRows = this.rows;
                }

                let filteredRows = this.filter(startRows, filter);
                let sortedRows = this.sort(filteredRows, sortColumns);

                let diff = start - (start % 10);
                let rows = parent ? sortedRows : sortedRows.slice(start % 10, end - diff);

                return {
                    total: filter ? 100 : 25,
                    rows,
                };
            },

            filter (rows, filter) {
                if (!filter) {
                    return rows;
                }

                let regex = new RegExp(filter, 'i');

                return rows.filter(row => {
                    return regex.test(row.firstName) || regex.test(row.secondName);
                });
            },
            sort (rows, sortColumns) {
                if (!sortColumns.length) {
                    return rows;
                }

                let sortedRows = rows;

                sortColumns
                    .filter(sortColumn => sortColumn.direction !== null)
                    .forEach(sortColumn => {
                        sortedRows.sort((a, b) => {
                            a = a[sortColumn.property];
                            b = b[sortColumn.property];

                            return (sortColumn.direction ? 1 : -1) * ('' + a.localeCompare(b));
                        });
                    });

                return sortedRows;
            },
            sleep (ms) {
                return new Promise(resolve => setTimeout(resolve, ms));
            },
            findChild() {
                window.axios.get('http://127.0.0.1:8001/dataFirst', {
                    params: {
                        test: this.filterInput
                    }
                }).then(response => {
                    this.rows = response.data;
                }).catch(e => {
                    console.log(e);
                });
            }
        },
        match: {
        }
    });
</script>
