/* when document is ready */
    $(function(){
    /* initiate the plugin */
        $("div.pagination").jPages({
        containerID  : "itemconteiner",
        perPage      : 3,
        startPage    : 1,
        startRange   : 1,
        midRange     : 5,
        endRange     : 1
    });
});
