{"filter":false,"title":"History.php","tooltip":"/mynews/app/History.php","undoManager":{"mark":1,"position":0,"stack":[[{"start":{"row":8,"column":4},"end":{"row":8,"column":6},"action":"remove","lines":["//"],"id":2},{"start":{"row":8,"column":4},"end":{"row":13,"column":6},"action":"insert","lines":["protected $guarded = array('id');","","    public static $rules = array(","        'news_id' => 'required',","        'edited_at' => 'required',","    );"]}],[{"start":{"row":0,"column":0},"end":{"row":15,"column":0},"action":"remove","lines":["<?php","","namespace App;","","use Illuminate\\Database\\Eloquent\\Model;","","class History extends Model","{","    protected $guarded = array('id');","","    public static $rules = array(","        'news_id' => 'required',","        'edited_at' => 'required',","    );","}",""],"id":13},{"start":{"row":0,"column":0},"end":{"row":14,"column":1},"action":"insert","lines":["<?php","","namespace App;","","use Illuminate\\Database\\Eloquent\\Model;","","class History extends Model","{","    protected $guarded = array('id');","","    public static $rules = array(","        'news_id' => 'required',","        'edited_at' => 'required',","    );","}"]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":15,"column":0},"end":{"row":15,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1572183969020,"hash":"8b2f6d8f3edaacfac961e891db2fc6043c218e81"}