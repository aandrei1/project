<template>
    <div class="container">
        <div id="applicationContainer">
            <div id="navBarContainer" class="navbar navbar-default">
                <ul class="nav navbar-nav">
                    <li class="nav-link" :class="{ active: menuItem.isActive }" v-for="menuItem in navItemsArray" ><a :href="menuItem.href" @click="selectTabItem(menuItem)">{{ menuItem.name }}</a></li>
                </ul>
            </div>
            <div id="tabContentContainer">
                <singleTab name="tab1" titleprop="Title x"  :selected="true">
                    <h1>
                        Title X is good
                    </h1>
                    <p>
                        Lorem Ipsum este pur şi simplu o machetă pentru text a industriei tipografice. Lorem Ipsum a fost macheta standard a industriei încă din secolul al XVI-lea, când un tipograf anonim a luat o planşetă de litere şi le-a amestecat pentru a crea o carte demonstrativă pentru literele respective. Nu doar că a supravieţuit timp de cinci secole, dar şi a facut saltul în tipografia electronică practic neschimbată. A fost popularizată în anii '60 odată cu ieşirea colilor Letraset care conţineau pasaje Lorem Ipsum, iar mai recent, prin programele de publicare pentru calculator, ca Aldus PageMaker care includeau versiuni de Lorem Ipsum.
                    </p>
                </singleTab>
                <singleTab name="tab2" titleprop="Meta is new" >
                    <h1>
                        New meta .. excuse
                    </h1>
                    <p>
                        Lorem Ipsum este pur şi simplu o machetă pentru text a industriei tipografice. Lorem Ipsum a fost macheta standard a industriei încă din secolul al XVI-lea, când un tipograf anonim a luat o planşetă de litere şi le-a amestecat pentru a crea o carte demonstrativă pentru literele respective. Nu doar că a supravieţuit timp de cinci secole, dar şi a facut saltul în tipografia electronică practic neschimbată. A fost popularizată în anii '60 odată cu ieşirea colilor Letraset care conţineau pasaje Lorem Ipsum, iar mai recent, prin programele de publicare pentru calculator, ca Aldus PageMaker care includeau versiuni de Lorem Ipsum.
                    </p>
                </singleTab>
                <singleTab name="tab3" titleprop="Vara" >
                    <h1>
                        The summer as it ssaid
                    </h1>
                    <p>
                        Lorem Ipsum este pur şi simplu o machetă pentru text a industriei tipografice. Lorem Ipsum a fost macheta standard a industriei încă din secolul al XVI-lea, când un tipograf anonim a luat o planşetă de litere şi le-a amestecat pentru a crea o carte demonstrativă pentru literele respective. Nu doar că a supravieţuit timp de cinci secole, dar şi a facut saltul în tipografia electronică practic neschimbată. A fost popularizată în anii '60 odată cu ieşirea colilor Letraset care conţineau pasaje Lorem Ipsum, iar mai recent, prin programele de publicare pentru calculator, ca Aldus PageMaker care includeau versiuni de Lorem Ipsum.
                    </p>
                </singleTab>
                <singleTab name="tab4" titleprop="Bea" >
                    <h1>
                        Drinks
                    </h1>
                    <p>
                        Lorem Ipsum este pur şi simplu o machetă pentru text a industriei tipografice. Lorem Ipsum a fost macheta standard a industriei încă din secolul al XVI-lea, când un tipograf anonim a luat o planşetă de litere şi le-a amestecat pentru a crea o carte demonstrativă pentru literele respective. Nu doar că a supravieţuit timp de cinci secole, dar şi a facut saltul în tipografia electronică practic neschimbată. A fost popularizată în anii '60 odată cu ieşirea colilor Letraset care conţineau pasaje Lorem Ipsum, iar mai recent, prin programele de publicare pentru calculator, ca Aldus PageMaker care includeau versiuni de Lorem Ipsum.
                    </p>
                </singleTab>
                <singleTab name="tab5" titleprop="Lapte" >
                    <h1>
                        Not whiskey
                    </h1>
                    <p>
                        Lorem Ipsum este pur şi simplu o machetă pentru text a industriei tipografice. Lorem Ipsum a fost macheta standard a industriei încă din secolul al XVI-lea, când un tipograf anonim a luat o planşetă de litere şi le-a amestecat pentru a crea o carte demonstrativă pentru literele respective. Nu doar că a supravieţuit timp de cinci secole, dar şi a facut saltul în tipografia electronică practic neschimbată. A fost popularizată în anii '60 odată cu ieşirea colilor Letraset care conţineau pasaje Lorem Ipsum, iar mai recent, prin programele de publicare pentru calculator, ca Aldus PageMaker care includeau versiuni de Lorem Ipsum.
                    </p>
                </singleTab>
            </div>
        </div>
    </div>
</template>

<script>
    import singleTab from './SingleTab.vue';

    export default{
        components:{
            singleTab
        },
        data()
        {
            return {
                navItemsArray: []
            }
        },
        mounted()
        {
            this.navItemsArray = this.$children
        },
        methods:{
            selectTabItem(passedAlongMenuItemObject){
                this.navItemsArray.forEach(navItem => {
                    navItem.isActive = (passedAlongMenuItemObject == navItem);
                })
            }
        }

    }

</script>

