<?php include ('header.php'); ?>
<style>
#editor 
{
  width: 90%;
  height: 50vh;
  padding: 10px;
  border: 3px solid orange;
  background-color: black;
  color: white;
  font-size: 14px;
  font-family: monospace;
  text-align: left;
  border-radius: 5px;
}
.statement 
{
    color: orangered;
}
</style>
<center>
<div class="container" style="padding:2%;">
      <p style="color: red;">* choose your database before run query. </p>
    <div class="row">
      <div class="col-sm-12" style="border:1px solid black;border-radius:10px;padding:2%;">
        <form action="index.php" method="post">
            <div class="form-group" style="margin-top: 2%;">
              <select class="form-control" id="sel1" name="db-name" style="width:90%;border: 2px solid orange;background-color: black;color: white;" placeholder="choose">
              <?php
                if($_SESSION['un'] && $_SESSION['sn'] && $_SESSION['pw'])
                {
                  ?>
                  <option value="">Select The database here</option>
                  <?php
                    $link = mysqli_connect($_SESSION['sn'], $_SESSION['un'], $_SESSION['pw']);
                    $res = mysqli_query($link,"SHOW DATABASES");
                    while ($row = mysqli_fetch_assoc($res))
                    {
                      ?>
                      <option value="<?php echo $row['Database']; ?>"><?php echo $row['Database']; ?></option>
                      <?php
                    }
                }
                else
                {
                  ?>
                  <option value="">Select The database here</option>
                  <option value="">Your are not connected with database.</option>
                  <?php
                }
              ?>
            </select>
          </div>
          <input type="text" id="qry-data" name="qry-data" style="display: none;">
          <div id="editor"  contenteditable="true"></div>
          <div style="margin-top: 2%;width:90%;">
            <input type="reset" class="btn btn-danger" style="width:45%;float: left;" value="Cancel">
            <input type="submit" class="btn btn-success" style="width:45%;float: right;" name="run" value="Run Queries">
          </div>
        </form>
      </div>
    </div>
  </div>
  <div id="tt">

  </div>
<script language="javascript" type="text/javascript">
var tags = [
  "ACCOUNT",
  "ACTION",
  "ADD",
  "AES_DECRYPT",
  "AES_ENCRYPT",
  "AFTER",
  "AGAINST",
  "AGGREGATE",
  "ALGORITHM",
  "ALL",
  "ALTER",
  "ANALYSE",
  "ANALYZE",
  "AND",
  "ANY_VALUE",
  "ARCHIVE",
  "AREA",
  "AS",
  "ASBINARY",
  "ASC",
  "ASTEXT",
  "ASWKB",
  "ASWKT",
  "AT",
  "AUTOCOMMIT",
  "AUTOEXTEND_SIZE",
  "AUTO_INCREMENT",
  "AVG_ROW_LENGTH",
  "BEFORE",
  "BEGIN",
  "BETWEEN",
  "BIGINT",
  "BINARY",
  "BINLOG",
  "BOOL",
  "BOOLEAN",
  "BOTH",
  "BTREE",
  "BUFFER",
  "BY",
  "BYTE",
  "CACHE",
  "CALL",
  "CASCADE",
  "CASE",
  "CATALOG_NAME",
  "CEIL",
  "CEILING",
  "CENTROID",
  "CHAIN",
  "CHANGE",
  "CHANNEL",
  "CHAR",
  "CHARACTER",
  "CHARSET",
  "CHECK",
  "CHECKSUM",
  "CIPHER",
  "CLASS_ORIGIN",
  "CLIENT",
  "CLOSE",
  "COALESCE",
  "CODE",
  "COLLATE",
  "COLLATION",
  "COLUMN",
  "COLUMNS",
  "COLUMN_NAME",
  "COMMENT",
  "COMMIT",
  "COMMITTED",
  "COMPACT",
  "COMPLETION",
  "COMPRESSED",
  "COMPRESSION",
  "CONCURRENT",
  "CONDITION",
  "CONNECTION",
  "CONSISTENT",
  "CONSTRAINT",
  "CONSTRAINT_CATALOG",
  "CONSTRAINT_NAME",
  "CONSTRAINT_SCHEMA",
  "CONTAINS",
  "CONTINUE",
  "CONVERT",
  "CONVEXHULL",
  "COUNT",
  "CREATE",
  "CREATE_DH_PARAMETERS",
  "CROSS",
  "CROSSES",
  "CSV",
  "CURRENT_USER",
  "CURSOR",
  "CURSOR_NAME",
  "DATA",
  "DATABASE",
  "DATABASES",
  "DATAFILE",
  "DATE",
  "DATETIME",
  "DATE_ADD",
  "DATE_SUB",
  "DAY",
  "DAY_HOUR",
  "DAY_MINUTE",
  "DAY_SECOND",
  "DEALLOCATE",
  "DEC",
  "DECIMAL",
  "DECLARE",
  "DEFAULT",
  "DEFAULT_AUTH",
  "DEFINER",
  "DELAYED",
  "DELAY_KEY_WRITE",
  "DELETE",
  "DESC",
  "DESCRIBE",
  "DES_KEY_FILE",
  "DIAGNOSTICS",
  "DIMENSION",
  "DIRECTORY",
  "DISABLE",
  "DISCARD",
  "DISJOINT",
  "DISTANCE",
  "DISTINCT",
  "DISTINCTROW",
  "DO",
  "DROP",
  "DUAL",
  "DUMPFILE",
  "DUPLICATE",
  "DYNAMIC",
  "ELSE",
  "ELSEIF",
  "ENABLE",
  "ENCLOSED",
  "ENCRYPTION",
  "END",
  "ENDPOINT",
  "ENDS",
  "ENGINE",
  "ENGINES",
  "ENVELOPE",
  "EQUALS",
  "ERROR",
  "ERRORS",
  "ESCAPE",
  "ESCAPED",
  "EVENT",
  "EVENTS",
  "EVERY",
  "EXCHANGE",
  "EXECUTE",
  "EXISTS",
  "EXIT",
  "EXPANSION",
  "EXPIRE",
  "EXPLAIN",
  "EXPORT",
  "EXTENDED",
  "EXTENT_SIZE",
  "EXTERIORRING",
  "EXTRACTION)",
  "FALSE",
  "FAST",
  "FEDERATED",
  "FETCH",
  "FIELDS",
  "FILE",
  "FILE_BLOCK_SIZE",
  "FILTER",
  "FIRST",
  "FIXED",
  "FLOAT",
  "FLOAT",
  "FLOOR",
  "FLUSH",
  "FOR",
  "FORCE",
  "FOREIGN",
  "FORMAT",
  "FROM",
  "FULL",
  "FULLTEXT",
  "FUNCTION",
  "GENERAL",
  "GEOMCOLLFROMTEXT",
  "GEOMCOLLFROMWKB",
  "GEOMETRYCOLLECTION",
  "GEOMETRYCOLLECTIONFROMTEXT",
  "GEOMETRYCOLLECTIONFROMWKB",
  "GEOMETRYFROMTEXT",
  "GEOMETRYFROMWKB",
  "GEOMETRYN",
  "GEOMETRYTYPE",
  "GEOMFROMTEXT",
  "GEOMFROMWKB",
  "GET",
  "GLENGTH",
  "GLOBAL",
  "GRANT",
  "GRANTS",
  "GROUP",
  "HANDLER",
  "HAVING",
  "HEAP",
  "HELP",
  "HELP_DATE",
  "HELP_VERSION",
  "HIGH_PRIORITY",
  "HOST",
  "HOSTS",
  "HOUR",
  "HOUR_MINUTE",
  "HOUR_SECOND",
  "IDENTIFIED",
  "IF",
  "IGNORE",
  "IGNORE_SERVER_IDS",
  "IMPORT",
  "IN",
  "INDEX",
  "INDEXES",
  "INFILE",
  "INITIAL_SIZE",
  "INLINE",
  "INNER",
  "INNODB",
  "INSERT",
  "INSERT_METHOD",
  "INSTALL",
  "INSTANCE",
  "INT",
  "INTEGER",
  "INTERIORRINGN",
  "INTERSECTS",
  "INTERVAL",
  "INTO",
  "IO_THREAD",
  "IS",
  "ISCLOSED",
  "ISEMPTY",
  "ISOLATION",
  "ISSIMPLE",
  "ISSUER",
  "ITERATE",
  "JOIN",
  "JSON",
  "JSON_APPEND",
  "JSON_ARRAY",
  "JSON_ARRAYAGG",
  "JSON_ARRAY_APPEND",
  "JSON_ARRAY_INSERT",
  "JSON_CONTAINS",
  "JSON_CONTAINS_PATH",
  "JSON_DEPTH",
  "JSON_EXTRACT",
  "JSON_INSERT",
  "JSON_KEYS",
  "JSON_LENGTH",
  "JSON_MERGE",
  "JSON_MERGE_PATCH",
  "JSON_MERGE_PRESERVE",
  "JSON_OBJECT",
  "JSON_OBJECTAGG",
  "JSON_PRETTY",
  "JSON_QUOTE",
  "JSON_REMOVE",
  "JSON_REPLACE",
  "JSON_SEARCH",
  "JSON_SET",
  "JSON_STORAGE_SIZE",
  "JSON_TYPE",
  "JSON_UNQUOTE",
  "JSON_VALID",
  "KEY",
  "KEYS",
  "KEY_BLOCK_SIZE",
  "KILL",
  "LAST",
  "LEADING",
  "LEAVE",
  "LEAVES",
  "LEFT",
  "LEVEL",
  "LIKE",
  "LIMIT",
  "LINEFROMTEXT",
  "LINEFROMWKB",
  "LINES",
  "LINESTRING",
  "LINESTRINGFROMTEXT",
  "LINESTRINGFROMWKB",
  "LOAD",
  "LOCAL",
  "LOCK",
  "LOGFILE",
  "LOGS",
  "LONG",
  "LONGBINARY",
  "LOOP",
  "LOW_PRIORITY",
  "MASTER",
  "MASTER_AUTO_POSITION",
  "MASTER_BIND",
  "MASTER_CONNECT_RETRY",
  "MASTER_HEARTBEAT_PERIOD",
  "MASTER_HOST",
  "MASTER_LOG_FILE",
  "MASTER_LOG_POS",
  "MASTER_PASSWORD",
  "MASTER_PORT",
  "MASTER_RETRY_COUNT",
  "MASTER_SSL",
  "MASTER_SSL_CA",
  "MASTER_SSL_CERT",
  "MASTER_SSL_CIPHER",
  "MASTER_SSL_CRL",
  "MASTER_SSL_CRLPATH",
  "MASTER_SSL_KEY",
  "MASTER_SSL_VERIFY_SERVER_CERT",
  "MASTER_TLS_VERSION",
  "MASTER_USER",
  "MATCH",
  "MAX_CONNECTIONS_PER_HOUR",
  "MAX_QUERIES_PER_HOUR",
  "MAX_ROWS",
  "MAX_SIZE",
  "MAX_UPDATES_PER_HOUR",
  "MAX_USER_CONNECTIONS",
  "MBRCONTAINS",
  "MBRDISJOINT",
  "MBREQUAL",
  "MBRINTERSECTS",
  "MBROVERLAPS",
  "MBRTOUCHES",
  "MBRWITHIN",
  "MEDIUM",
  "MEMORY",
  "MERGE",
  "MESSAGE_TEXT",
  "MIDDLEINT",
  "MINUTE",
  "MINUTE_SECOND",
  "MIN_ROWS",
  "MLINEFROMTEXT",
  "MLINEFROMWKB",
  "MOD",
  "MODE",
  "MODIFY",
  "MONTH",
  "MPOINTFROMTEXT",
  "MPOINTFROMWKB",
  "MPOLYFROMTEXT",
  "MPOLYFROMWKB",
  "MRG_MYISAM",
  "MULTILINESTRING",
  "MULTILINESTRINGFROMTEXT",
  "MULTILINESTRINGFROMWKB",
  "MULTIPOINT",
  "MULTIPOINTFROMTEXT",
  "MULTIPOINTFROMWKB",
  "MULTIPOLYGON",
  "MULTIPOLYGONFROMTEXT",
  "MULTIPOLYGONFROMWKB",
  "MUTEX",
  "MYISAM",
  "MYSQL_ERRNO",
  "NAME",
  "NAMES",
  "NATIONAL",
  "NATURAL",
  "NCHAR",
  "NDB",
  "NDBCLUSTER",
  "NEVER",
  "NEXT",
  "NO",
  "NODEGROUP",
  "NONE",
  "NOT",
  "NO_WRITE_TO_BINLOG",
  "NULL",
  "NUMBER",
  "NUMERIC",
  "NUMGEOMETRIES",
  "NUMINTERIORRINGS",
  "NUMPOINTS",
  "NVARCHAR",
  "OFFSET",
  "ON",
  "ONLY",
  "OPEN",
  "OPTIMIZE",
  "OPTIMIZER_COSTS",
  "OPTION",
  "OPTIONALLY",
  "OPTIONS",
  "OR",
  "ORDER",
  "OUTER",
  "OUTFILE",
  "OVERLAPS",
  "OWNER",
  "PACK_KEYS",
  "PARSER",
  "PARTIAL",
  "PARTITION",
  "PARTITIONING",
  "PARTITIONS",
  "PASSWORD",
  "PATH)",
  "PLUGIN",
  "PLUGINS",
  "PLUGIN_DIR",
  "POINT",
  "POINTFROMTEXT",
  "POINTFROMWKB",
  "POINTN",
  "POLYFROMTEXT",
  "POLYFROMWKB",
  "POLYGON",
  "POLYGONFROMTEXT",
  "POLYGONFROMWKB",
  "PORT",
  "POW",
  "POWER",
  "PRECISION",
  "PREPARE",
  "PRESERVE",
  "PREV",
  "PRIMARY",
  "PRIVILEGES",
  "PROCEDURE",
  "PROCESS",
  "PROCESSLIST",
  "PROFILE",
  "PROFILES",
  "PROXY",
  "PURGE",
  "QUERY",
  "QUICK",
  "RANDOM_BYTES",
  "READ",
  "REAL",
  "REBUILD",
  "RECOVER",
  "REDUNDANT",
  "REFERENCES",
  "RELAY",
  "RELAYLOG",
  "RELAY_LOG_FILE",
  "RELAY_LOG_POS",
  "RELEASE",
  "RELOAD",
  "REMOVE",
  "RENAME",
  "REORGANIZE",
  "REPAIR",
  "REPEAT",
  "REPEATABLE",
  "REPLACE",
  "REPLICATE_DO_DB",
  "REPLICATE_DO_TABLE",
  "REPLICATE_IGNORE_DB",
  "REPLICATE_IGNORE_TABLE",
  "REPLICATE_REWRITE_DB",
  "REPLICATE_WILD_DO_TABLE",
  "REPLICATE_WILD_IGNORE_TABLE",
  "REPLICATION",
  "REQUIRE",
  "RESET",
  "RESIGNAL",
  "RESTRICT",
  "RETURN",
  "RETURNED_SQLSTATE",
  "RETURNS",
  "REVOKE",
  "RIGHT",
  "RLIKE",
  "ROLLBACK",
  "ROWS",
  "ROW_COUNT",
  "ROW_FORMAT",
  "SAVEPOINT",
  "SCHEDULE",
  "SCHEMA",
  "SCHEMAS",
  "SCHEMA_NAME",
  "SECOND",
  "SECURITY",
  "SELECT",
  "SEPARATOR",
  "SERIAL",
  "SERIALIZABLE",
  "SERVER",
  "SESSION",
  "SET",
  "SHA",
  "SHA",
  "SHA",
  "SHARE",
  "SHOW",
  "SHUTDOWN",
  "SIGNAL",
  "SIGNED",
  "SLAVE",
  "SLOW",
  "SNAPSHOT",
  "SOCKET",
  "SONAME",
  "SOUNDS",
  "SPATIAL",
  "SQLSTATE",
  "SQL_AFTER_GTIDS",
  "SQL_AFTER_MTS_GAPS",
  "SQL_BEFORE_GTIDS",
  "SQL_BIG_RESULT",
  "SQL_BUFFER_RESULT",
  "SQL_CACHE",
  "SQL_CALC_FOUND_ROWS",
  "SQL_LOG_BIN",
  "SQL_NO_CACHE",
  "SQL_SLAVE_SKIP_COUNTER",
  "SQL_SMALL_RESULT",
  "SQL_THREAD",
  "SRID",
  "SSL",
  "START",
  "STARTING",
  "STARTPOINT",
  "STARTS",
  "STATS_AUTO_RECALC",
  "STATS_PERSISTENT",
  "STATS_SAMPLE_PAGES",
  "STATUS",
  "STD",
  "STDDEV",
  "STOP",
  "STORAGE",
  "STORED",
  "STRAIGHT_JOIN",
  "STRING",
  "ST_AREA",
  "ST_ASBINARY",
  "ST_ASGEOJSON",
  "ST_ASTEXT",
  "ST_ASWKB",
  "ST_ASWKT",
  "ST_BUFFER",
  "ST_BUFFER_STRATEGY",
  "ST_CENTROID",
  "ST_CONTAINS",
  "ST_CONVEXHULL",
  "ST_CROSSES",
  "ST_DIFFERENCE",
  "ST_DIMENSION",
  "ST_DISJOINT",
  "ST_DISTANCE",
  "ST_DISTANCE_SPHERE",
  "ST_ENDPOINT",
  "ST_ENVELOPE",
  "ST_EQUALS",
  "ST_EXTERIORRING",
  "ST_GEOHASH",
  "ST_GEOMCOLLFROMTEXT",
  "ST_GEOMCOLLFROMWKB",
  "ST_GEOMETRYCOLLECTIONFROMTEXT",
  "ST_GEOMETRYCOLLECTIONFROMWKB",
  "ST_GEOMETRYFROMTEXT",
  "ST_GEOMETRYFROMWKB",
  "ST_GEOMETRYN",
  "ST_GEOMETRYTYPE",
  "ST_GEOMFROMGEOJSON",
  "ST_GEOMFROMTEXT",
  "ST_GEOMFROMWKB",
  "ST_INTERIORRINGN",
  "ST_INTERSECTION",
  "ST_INTERSECTS",
  "ST_ISCLOSED",
  "ST_ISEMPTY",
  "ST_ISSIMPLE",
  "ST_ISVALID",
  "ST_LATFROMGEOHASH",
  "ST_LINEFROMTEXT",
  "ST_LINEFROMWKB",
  "ST_LINESTRINGFROMTEXT",
  "ST_LINESTRINGFROMWKB",
  "ST_LONGFROMGEOHASH",
  "ST_MAKEENVELOPE",
  "ST_MLINEFROMTEXT",
  "ST_MLINEFROMWKB",
  "ST_MPOINTFROMTEXT",
  "ST_MPOINTFROMWKB",
  "ST_MPOLYFROMTEXT",
  "ST_MPOLYFROMWKB",
  "ST_MULTILINESTRINGFROMTEXT",
  "ST_MULTILINESTRINGFROMWKB",
  "ST_MULTIPOINTFROMTEXT",
  "ST_MULTIPOINTFROMWKB",
  "ST_MULTIPOLYGONFROMTEXT",
  "ST_MULTIPOLYGONFROMWKB",
  "ST_NUMGEOMETRIES",
  "ST_NUMINTERIORRING",
  "ST_NUMINTERIORRINGS",
  "ST_NUMPOINTS",
  "ST_OVERLAPS",
  "ST_POINTFROMGEOHASH",
  "ST_POINTFROMTEXT",
  "ST_POINTFROMWKB",
  "ST_POINTN",
  "ST_POLYFROMTEXT",
  "ST_POLYFROMWKB",
  "ST_POLYGONFROMTEXT",
  "ST_POLYGONFROMWKB",
  "ST_SIMPLIFY",
  "ST_SRID",
  "ST_STARTPOINT",
  "ST_SYMDIFFERENCE",
  "ST_TOUCHES",
  "ST_UNION",
  "ST_VALIDATE",
  "ST_WITHIN",
  "ST_X",
  "ST_Y",
  "SUBCLASS_ORIGIN",
  "SUBJECT",
  "SUPER",
  "TABLE",
  "TABLES",
  "TABLESPACE",
  "TABLE_NAME",
  "TEMPORARY",
  "TERMINATED",
  "THEN",
  "TIME",
  "TIMESTAMP",
  "TO",
  "TOUCHES",
  "TRADITIONAL",
  "TRAILING",
  "TRANSACTION",
  "TRIGGER",
  "TRIGGERS",
  "TRUE",
  "TRUNCATE",
  "TYPE",
  "UNCOMMITTED",
  "UNDO",
  "UNINSTALL",
  "UNION",
  "UNIQUE",
  "UNLOCK",
  "UNSIGNED",
  "UNTIL",
  "UPDATE",
  "UPGRADE",
  "USAGE",
  "USE",
  "USER",
  "USER_RESOURCES",
  "USE_FRM",
  "USING",
  "VALUE",
  "VALUES",
  "VARCHARACTER",
  "VARIABLE",
  "VARIABLES",
  "VARYING",
  "VIEW",
  "VIRTUAL",
  "WAIT",
  "WARNINGS",
  "WHEN",
  "WHERE",
  "WHILE",
  "WITH",
  "WITHIN",
  "WORK",
  "WRAPPER",
  "WRITE",
  "X",
  "X",
  "XA",
  "Y",
  "YEAR",
  "YEAR_MONTH",
  "ZEROFILL"
  ];
// Keyup event
$("#editor").on("keyup", function(e){
  // Space key pressed
  if (e.keyCode == 32){
    var newHTML = "";
    // Loop through words
    $(this).text().replace(/[\s]+/g, " ").trim().split(" ").forEach(function(val){
      // If word is statement
      if (tags.indexOf(val.trim().toUpperCase()) > -1)
        newHTML += "<span class='statement'>" + val + "&nbsp;</span>";
      else
        newHTML += "<span class='other'>" + val + "&nbsp;</span>"; 
    });
    $(this).html(newHTML);

    // Set cursor postion to end of text
    var child = $(this).children();
    var range = document.createRange();
    var sel = window.getSelection();
    range.setStart(child[child.length-1], 1);
    range.collapse(true);
    sel.removeAllRanges();
    sel.addRange(range);
    this.focus();
  }
});

var startTyping = "Start Typing";


function placeCaretAtEnd(el) {
    el.focus();
    if (typeof window.getSelection != "undefined"
            && typeof document.createRange != "undefined") {
        var range = document.createRange();
        range.selectNodeContents(el);
        range.collapse(false);
        var sel = window.getSelection();
        sel.removeAllRanges();
        sel.addRange(range);
    } else if (typeof document.body.createTextRange != "undefined") {
        var textRange = document.body.createTextRange();
        textRange.moveToElementText(el);
        textRange.collapse(false);
        textRange.select();
    }
}
function split( val ) {
    return val.split( / / );
}
function extractLast( term ) {
    return split( term ).pop();
}

$("#editor")
    .bind("keydown", function (event) {
        if (event.keyCode === $.ui.keyCode.TAB && $(this).data("autocomplete").menu.active) {
            event.preventDefault();
        }
    })
    .autocomplete({
        minLength: 0,
        source: function (request, response) {
            var term = request.term,
                results = [];
            if (term.indexOf(" ") >= 0) {
                term = extractLast(request.term);
                if (term.length > 0) {
                    results = $.ui.autocomplete.filter(tags, term);
                } else {
                    results = [startTyping];
                }
            }
            response(results);
        },
        focus: function () {
            return false;
        },
        select: function (event, ui) {
            if (ui.item.value !== startTyping) {
                var value = $(this).html();
                var terms = split(value);
                terms.pop();
                terms.push(ui.item.value);
                $(this).html(terms.join(" "));
                placeCaretAtEnd(this);
            }
            return false;
        }
    })
    .data("autocomplete")._renderItem = function (ul, item) {
        if (item.label != startTyping) {
            return $("<li></li>")
                .data("item.autocomplete", item)
                .append("<a><div>" + item.label + "</div></div></a>")
                .appendTo(ul);
        } else {
            return $("<li></li>")
                .data("item.autocomplete", item)
                .append("<a>" + item.label + "</a>")
                .appendTo(ul);
        }
    }
;
</script>
<script>
  document.body.onkeyup = function(e)
  {
    var t=document.getElementById("editor").innerHTML;
    var text = $(t).text();
    document.getElementById("qry-data").value=text;
  }
</script>
<?php
  if(isset($_POST['run']))
  {
    $db=$_POST['db-name'];
    $con=mysqli_connect($_SESSION['sn'], $_SESSION['un'], $_SESSION['pw'],$db);
    if($con)
    {
      //echo("connected");
    }
    else
    {
      ?>
        <script>
          alert("Error !! Connection is not done with database !! plz choose correct database.");
        </script>
      <?php
    }
    $qry=$_POST['qry-data'];
    //$qry="INSERT INTO `admin` (`id`, `name`) VALUES (NULL, 'lucky');";
    $run=mysqli_query($con,$qry);
    if($run)
    {
      ?>
      <script>
        alert("Query run successfully");
      </script>
      <?php
    }
    else
    {
      ?>
      <script>
        alert("Error !! somewhere is query mistake=<?php echo $qry; ?>");
      </script>
      <?php
    }
  }
?>