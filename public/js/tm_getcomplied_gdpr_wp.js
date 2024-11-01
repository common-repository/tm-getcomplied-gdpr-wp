(function(c,o,m,p,l,y){
    c.cp = c.cp || function() {
        (c.cp.q = c.cp.q || []).push(arguments)
    };
    c.getComplied = {
        callback: {},
        command: function(){},
        settings: {
            cpid: 'GC-'+tmgdprwp_getcomplied.id, 
            cpsv: 1 
        }
    };
    l = o.getElementsByTagName('head')[0];
    y = o.createElement('script');
    y.async = 1;
    y.src = m + p + c.getComplied.settings.cpsv;
    l.appendChild(y);
})(window,document,'https://script.getcomplied.com/scripts/','getcomplied.js?sv=');