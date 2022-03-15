<template>
    <div>
        <nav v-if="data.last_page !== 1" aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <li class="page-item cursor-pointer" style="cursor:pointer!important;" @click="gotoPage(1)">
                    <a :style="data.current_page === 1 ? 'cursor:not-allowed' : ''" :class="data.current_page === 1 ? 'text-muted' :''" class="page-link">First</a>
                </li>
                <li class="page-item cursor-pointer" style="cursor:pointer!important;" @click="gotoPreviousPage()" >
                    <a :style="!data.prev_page_url ? 'cursor:not-allowed' : ''" :class="!data.prev_page_url ? 'text-muted' :''" class="page-link">&#9001;</a>
                </li>

                <li v-for="page in (data.last_page)" :key="page" class="page-item" :class="{active : data.current_page == page}">
                    <a v-if="page < data.current_page + 2 && page > data.current_page - 2" class="page-link cursor-pointer" style="cursor:pointer!important;" @click="paginate(page)">{{page}}</a>
                </li>

                <li class="page-item cursor-pointer" style="cursor:pointer!important;" @click="gotoNextPage()">
                    <a :style="!data.next_page_url ? 'cursor:not-allowed' : ''" :class="!data.next_page_url ? 'text-muted' :''" class="page-link">&#9002;</a>
                </li>
                <li class="page-item" style="cursor:pointer!important;" @click="gotoPage(data.last_page)">
                    <a :style="data.current_page === data.last_page ? 'cursor:not-allowed' : ''" :class="data.current_page === data.last_page ? 'text-muted' : ''" class="page-link">Last</a>
                </li>
            </ul>
        </nav>

    </div>
</template>

<script>
    export default {
        props: ["data", "show"],
        methods: {
            paginate(page)
            {
                let _this = this;
                _this.data.current_page = page;
                _this.$emit('updatePagination', _this.data);
            },
            gotoNextPage()
            {
                let _this = this;
                if (_this.data.current_page !== _this.data.last_page) {
                    _this.data.current_page = _this.data.current_page + 1;
                    _this.$emit('updatePagination', _this.data);
                }
            },
            gotoPreviousPage()
            {
                let _this = this;
                if (_this.data.current_page > 1) {
                    _this.data.current_page = _this.data.current_page - 1;
                    _this.$emit('updatePagination', _this.data);
                }
            },
            gotoPage(id)
            {
                let _this = this;
                _this.data.current_page = id;
                _this.$emit('updatePagination', _this.data);
            }
        }
    };
</script>
