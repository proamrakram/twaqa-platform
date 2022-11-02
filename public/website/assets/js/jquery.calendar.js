/*
 *	jQuery FullCalendar Extendable Plugin
 *	An Ajax (PHP - Mysql - jquery) script that extends the functionalities of the fullcalendar plugin
 *  Dependencies:
 *   - jquery
 * 	 - jquery spectrum
 *   - flatpickr
 *   - fullcalendar 5
 *   - Bootstrap 5
 *  Author: Paulo Regina
 *  Website: www.pauloreg.com
 *  Fullcalendar 5.10.2
 *	Released Under Envato Regular or Extended Licenses
 */

 (function(a){a.fn.extend({FullCalendarExt:function(b){function c(b,c){x(c,["all-day","categorie","categories","category","color","description","description_editable","end","start","id","repeat_id","repeat_type","title","url","user_id"]);var d="";a.getJSON(k.jsonConfig,{_:new Date().getHours()}).then(function(g){if(0<a(".custom-fields").children().length&&0<Object.keys(c).length)for(var h in Object.keys(c).every(function(a){return""===c[a]||null===c[a]})||(d="<hr />"),c){var j=c[h],k=[];"file"==h&&(void 0!==j&&"undefined"!==j&&""!==j?/\.(gif|jpg|jpeg|tiff|png)$/i.test(j)?j="<a target=\"_blank\" href=\""+j+"\"><img src=\""+j+"\" class=\"img-responsive\" /></a>":j="<a target=\"_blank\" href=\""+j+"\">"+j+"</a>":j="");var l=e(g,"<"+h+">");if(0<j.length||a.isArray(j)&&null!==j)if(a.isArray(j)&&null!==j){for(var m=0;m<j.length;m++)k.push(f(g,j[m]));d+="<h5><strong>"+l+"</strong></h5><p>"+k.join(", ")+"</p><p class=\"custom-field-sep\" style=\"margin-bottom: 0; height: 2px;\">&nbsp;</p>"}else j&&(d+="<h5><strong>"+l+"</strong></h5><p>"+j+"</p><p class=\"custom-field-sep\" style=\"margin-bottom: 0; height: 2px;\">&nbsp;</p>")}a("#details-body-content").html(b+d)}).fail(function(){a("#details-body-content").html(b)})}function d(){a("#modal-form-body :input").each(function(){var b=a(this).attr("name"),c=a(this)[0].tagName;switch(c){case"SELECT":var d=l.data[b];d!==void 0&&a("option[value=\""+d.replace("&amp;","&")+"\"]").prop("selected",!0);break;case"INPUT":var b=b.replace(/\[.*?\]/g,""),e=a(this).attr("type"),d=l.data[b];if("checkbox"==e&&void 0!==d)for(var f=d,g=0;g<f.length;g++)a("input[value=\""+f[g]+"\"]").prop("checked",!0);"radio"==e&&d!==void 0&&a("input[value=\""+d+"\"]").prop("checked",!0),"file"==e&&d!==void 0&&"undefined"!==d&&a(this).before("<p class=\"file-attachment\"><a target=\"_blank\" href=\""+d+"\">"+d+"</a></p>"),"text"==e&&(a("input[name=\""+b+"\"]").val(l.data[b]),a("input[name=title]").val(l.data.title),setTimeout(function(){a("#colorp").spectrum("set",l.data.color)},50),a("#startDate").val(l.d_startDate),a("input#startTime").val(l.d_startTime),a("#endDate").val(l.d_endDate),a("input#endTime").val(l.d_endTime));break;case"TEXTAREA":var d=l.data[b];a("textarea[name=\""+b+"\"]").val(d),a("textarea[name=\"description\"]").val(l.data.description_editable);break;default:a(":input[name=\""+b+"\"]").val(l.data[b]);}})}function e(a,b){var c="";for(var d in a)if(a.hasOwnProperty(d)){var e=a[d].fields;for(var f in e)e.hasOwnProperty(f)&&Object.keys(e).forEach(function(a){return!!(e[a].includes(b)||e[a].includes(b.replace(">","[]>")))&&void(c=a)})}return c}function f(a,b){var c=[];for(var d in a)a.hasOwnProperty(d)&&("object"==typeof a[d]?c=c.concat(f(a[d],b)):d==b&&c.push(a[d]));return c}var g="token="+a("#cal_token").val(),h=Intl.DateTimeFormat().resolvedOptions().timeZone,i={calendarSelector:"#calendar",loadingSelector:"#loading",lang:"en",token:"",timezone:h,ajaxJsonFetch:"includes/cal_events.php?"+g+"&timezone="+h,ajaxUiUpdate:"includes/cal_update.php?"+g+"&timezone="+h,ajaxEventQuickSave:"includes/cal_quicksave.php?"+g+"&timezone="+h,ajaxEventEdit:"includes/cal_edit_update.php?"+g+"&timezone="+h,ajaxEventDelete:"includes/cal_delete.php?"+g,ajaxEventExport:"includes/cal_export.php?"+g,ajaxRepeatCheck:"includes/cal_check_rep_events.php?"+g,ajaxRetrieveDescription:"includes/cal_description.php?"+g,ajaxImport:"importer.php?"+g,jsonConfig:"includes/form.json",modalSelector:"#calendarModal",modalPromptSelector:"#cal_prompt",modalEditPromptSelector:"#cal_edit_prompt_save",formAddEventSelector:"form#add_event",formFilterSelector:"form#filter-category select",formSearchSelector:"form#search",newEventText:"Add New Event",successAddEventMessage:"Successfully Added Event",successDeleteEventMessage:"Successfully Deleted Event",successUpdateEventMessage:"Successfully Updated Event",failureAddEventMessage:"Failed To Add Event",failureDeleteEventMessage:"Failed To Delete Event",failureUpdateEventMessage:"Failed To Update Event",generalFailureMessage:"Failed To Execute Action",ajaxError:"Failed to load content",emptyForm:"Form cannot be empty",unableToOpenEvent:"Something went wrong. Unable to open event",eventText:"Event: ",selectDateText:"Select date",repetitiveEventActionText:"This is a repetitive event, what do you want to do?",goToLabel:"goto",todayLabel:"today",monthLabel:"month",weekLabel:"week",dayLabel:"day",listLabel:"list",direction:"ltr",weekText:"W",defaultColor:"#587ca3",weekType:"timeGridWeek",dayType:"timeGridDay",listType:"listWeek",titleRangeSeparator:" \u2013 ",tooltip:!0,editable:!0,lazyFetching:!0,filter:!0,quickSave:!0,navLinks:!0,firstDay:0,gcal:!1,gcalUrlText:"View on Google",version:"modal",initialView:"dayGridMonth",aspectRatio:1.35,weekends:!0,weekNumbers:!1,weekNumberCalculation:"iso",hiddenDays:[],themeSystem:"standard",eventTimeFormat:{hour:"2-digit",minute:"2-digit",hour12:!1},fixedWeekCount:!0,allDaySlot:!0,slotDuration:"00:30:00",slotMinTime:"00:00:00",slotMaxTime:"24:00:00",nextDayThreshold:"00:00:00",slotEventOverlap:!0,displayEventEnd:!0,enableDrop:!0,enableResize:!0,savedRedirect:"index.php",removedRedirect:"index.php",updatedRedirect:"index.php",ajaxLoaderMarkup:"<div class=\"loadingDiv\"></div>",otherSource:!1,modalFormBody:a("#modal-form-body").html(),icons_title:!1,fc_extend:{},polling:!0,pollingInt:30,dayMaxEventRows:!0,moreLinkClick:"popover",palette:[["#0b57a4","#8bbdeb","#000000","#2a82d7","#148aa5","#3714a4","#587ca3","#a50516"],["#fb3c8f","#1b4f15","#1b4f15","#686868","#3aa03a","#ff0080","#fee233","#fc1cad"],["#7f2b14","#000066","#2b4726","#fd7222","#fc331c","#af31f2","#fc0d1b","#2b8a6d"],["#ea9999","#f9cb9c","#ffe599","#b6d7a8","#a2c4c9","#9fc5e8","#b4a7d6","#d5a6bd"]]},j=a.extend(i,b),k=j;!0==k.gcal&&(k.weekType="",k.dayType="");var l={},m={locale:k.lang,editable:k.editable,dayMaxEventRows:k.dayMaxEventRows,moreLinkClick:k.moreLinkClick,navLinks:k.navLinks,initialView:k.initialView,aspectRatio:k.aspectRatio,weekends:k.weekends,weekNumbers:k.weekNumbers,weekNumberCalculation:k.weekNumberCalculation,weekText:k.weekText,direction:k.direction,hiddenDays:k.hiddenDays,themeSystem:k.themeSystem,allDaySlot:k.allDaySlot,slotDuration:k.slotDuration,slotMinTime:k.slotMinTime,slotMaxTime:k.slotMaxTime,slotEventOverlap:k.slotEventOverlap,fixedWeekCount:k.fixedWeekCount,eventTimeFormat:k.eventTimeFormat,headerToolbar:{start:"prev,next today goTo",center:"title",end:"dayGridMonth,"+k.weekType+","+k.dayType+","+k.listType},titleRangeSeparator:k.titleRangeSeparator,monthNames:k.monthNames,monthNamesShort:k.monthNamesShort,dayNames:k.dayNames,dayNamesShort:k.dayNamesShort,buttonText:{today:k.todayLabel,month:k.monthLabel,week:k.weekLabel,day:k.dayLabel,list:k.listLabel},firstDay:k.firstDay,lazyFetching:k.lazyFetching,selectable:k.quickSave,selectMirror:k.quickSave,eventStartEditable:k.enableDrop,eventDurationEditable:k.enableResize,nextDayThreshold:k.nextDayThreshold,displayEventEnd:k.displayEventEnd,loading:function(b){!1==b?a(k.loadingSelector).hide():!0==b&&a(k.loadingSelector).show()},select:function(b){let c=b.view,d=b.start,e=b.end;calendar.view=c.type,"modal"==k.version&&(calendar.quickModal(d,e,b.allDay),p.unselect()),"dayGridMonth"!==c.type&&moment(d).format("HH:mm")!==moment(e).format("HH:mm")&&(a("#event-type option[value=\"false\"]").prop("selected",!0),a("#event-type-select").show(),a("#event-type-selected").show())},eventSources:[k.otherSource,{url:k.ajaxJsonFetch}],eventDrop:function(a){q(a)},eventResize:function(a){q(a)},eventDidMount:function(b){let c=a(b.el),d=b.event._def,e=b.view;if(k.tooltip)new bootstrap.Tooltip(b.el,{title:d.title,placement:"top",trigger:"hover",container:"body"});if(c.attr("href"))c.attr("data-toggle","modal"),c.attr("href","javascript:void(0)"),c.attr("onclick","calendar.openModalGcal(\""+encodeURI(d.title)+"\",\""+d.url+"\");");else{if(!0==k.icons_title){var f=c.find(".fc-title").text(),g=f.replace(/\[(.*?)\]/gi,"<i class=\"$1\"></i>");c.find(".fc-title").html(g)}var h=d.ui.backgroundColor,i=moment(d.extendedProps.utcStart).format("YYYY-MM-DD"),j=moment(d.extendedProps.utcStart).format("HH:mm"),l=moment(d.extendedProps.utcEnd).format("YYYY-MM-DD"),m=moment(d.extendedProps.utcEnd).format("HH:mm"),n=moment(d.extendedProps.utcEnd).isValid();if(!1==n)var l=i,m=j;c.attr("data-eventstart",d.extendedProps.utcStart),c.attr("data-eventend",d.extendedProps.utcEnd),c.attr("data-d_startdate",i),c.attr("data-d_starttime",j),c.attr("data-d_enddate",l),c.attr("data-d_endtime",m),"modal"==k.version&&(c.attr("data-toggle","modal"),c.attr("href","javascript:void(0)"),c.attr("data-id",d.publicId),c.attr("data-rep_id",d.extendedProps.original_id),c.attr("data-title",encodeURIComponent(d.title)),c.attr("data-url",encodeURIComponent(d.url)),c.attr("data-color",h),c.attr("onclick","calendar.openModal(this)"))}Object.freeze(calendar)},eventClick:function(){a(k.loadingSelector).show()},customButtons:{goTo:{text:k.goToLabel,click:function(){if(0>=a("#gotodate-wrap").length){var b=new Date;a("body").append(`<div id="gotodate-wrap" class="modal" tabindex="-1" role="dialog"><div class="modal-dialog" role="document"><div class="modal-content"><div class="modal-header"><h5 class="modal-title">${k.selectDateText}</h5><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></div><div class="modal-body"><p><input type="text" id="gotodate" /></p></div></div></div></div>`)}setTimeout(function(){a("#gotodate-wrap").modal("show"),a("#gotodate").flatpickr({enableTime:!1,defaultDate:b,altInput:!0,onChange:function(a){p.gotoDate(a[0]),b=a[0]}})},500)}}}},n=a.extend(m,k.fc_extend),o=document.querySelector(k.calendarSelector),p=new FullCalendar.Calendar(o,n);p.render(),k.polling&&setInterval(function(){p.refetchEvents()},1e3*k.pollingInt),calendar.openModal=function(b){l.id=a(b).data("id"),l.rep_id=a(b).data("rep_id"),l.title=a(b).data("title"),l.url=a(b).data("url"),l.eventStart=a(b).data("eventstart"),l.eventEnd=a(b).data("eventend"),l.color=a(b).data("color"),l.d_startDate=a(b).data("d_startdate"),l.d_startTime=a(b).data("d_starttime"),l.d_endDate=a(b).data("d_enddate"),l.d_endTime=a(b).data("d_endtime"),!0==k.icons_title?(l.title=l.title.replace(/\[(.*?)\]/gi,"<i class=\"$1\"></i>"),l.title=decodeURIComponent(l.title)):l.title=decodeURIComponent(l.title),a("#modal-form-body").hide(),a("#details-body").show(),l.ExpS=l.eventStart,l.ExpE=l.eventEnd,a.ajax({type:"POST",url:k.ajaxRetrieveDescription,data:{id:l.id,title:encodeURIComponent(l.title),start:l.d_startDate,mode:"edit"},cache:!1,beforeSend:function(){a(".loadingDiv").show(),a(".modal-footer").hide()},error:function(){a(".loadingDiv").hide(),console.log(k.ajaxError)},success:function(b){if(a(k.loadingSelector).hide(),b){a(".loadingDiv").hide();var d=JSON.parse(b),e=d.description.replace("$null",""),f=d.color.replace("$null",""),g=d.category.replace("$null","");l.description_editable=d.description_editable.replace("&amp;","&"),l.description=e.replace("&amp;","&"),l.category=g.replace("&amp;","&"),l.color=f,l.data=d;var h=JSON.parse(JSON.stringify(d));a("#details-body-title").html(l.title),c(e,h),a("#export-event, #delete-event, #edit-event").show(),a("#save-changes, #add-event").hide(),a(".modal-footer").show(),a(k.modalSelector).modal("show")}else alert(k.unableToOpenEvent)}}),a("#delete-event").off().on("click",function(a){u(l.id),a.preventDefault()}),a("#export-event").off().on("click",function(a){w(l.id,l.title,l.ExpS,l.ExpE),a.preventDefault()}),a("#edit-event").off().on("click",function(){document.getElementById("modal-form-body").reset(),a("#modal-form-body").html(k.modalFormBody),a("#export-event, #delete-event, #edit-event, #add-event").hide(),a("#save-changes").show().css("width","100%"),a("#details-body, #event-type-select").hide(),a("#repeat-type-select, #repeat-type-selected").hide(),a("#event-type-selected").show(),a("#modal-form-body").show(),a(k.modalSelector).modal("show"),d(),a("#save-changes").off().on("click",function(b){if(0==a("input[name=title]").val().length)alert(k.emptyForm);else{editFormData=new FormData;var c=a("#modal-form-body").serializeArray();a.each(c,function(b,c){if(a.isArray(c.value))for(var d=0;d<c.value.length;d++)editFormData.append(c.name+"[]",c.value[d]);else editFormData.append(c.name,c.value)});var d=a("#modal-form-body").find("input[type=checkbox]");a.each(d,function(b,c){a(this).is(":checked")||editFormData.append(a(c).attr("name"),"")}),a("#file")[0]&&a("#file")[0].files[0]!==void 0&&"undefined"!==a("#file")[0].files[0]&&editFormData.append("file",a("#file")[0].files[0]);let b=flatpickr("#startDate").input.value+" "+flatpickr("#startTime",{allowInput:!0,dateFormat:"H:i",enableTime:!0,noCalendar:!0,time_24hr:!0}).input.value,e=flatpickr("#endDate").input.value+" "+flatpickr("#endTime",{allowInput:!0,dateFormat:"H:i",enableTime:!0,noCalendar:!0,time_24hr:!0}).input.value;editFormData.set("timezone",k.timezone),s(l.id,editFormData)}b.preventDefault()})})},calendar.data=function(){var a={id:l.id,title:l.title,url:l.url,start:l.eventStart,end:l.eventEnd,description:l.description,color:l.color};return a},calendar.openModalGcal=function(b,c){a("#modal-form-body").hide(),a("#details-body").show(),a("#details-body-title").html(b),a("#details-body-content").html("<a target=\"_blank\" href=\""+c+"\">"+k.gcalUrlText+"</a>"),a("#export-event, #delete-event, #edit-event").hide(),a("#save-changes, #add-event").hide(),a(".modal-footer").hide(),a(k.modalSelector).modal("show")},calendar.quickModal=function(b,c){document.getElementById("modal-form-body").reset(),a("#modal-form-body").html(k.modalFormBody);var d=moment(b).format("YYYY-MM-DD"),e=moment(b).format("HH:mm"),f=moment(c).format("YYYY-MM-DD"),g=moment(c).format("HH:mm"),h=moment(c).isValid();if(!1==h)var f=d,g=e;a("#startDate").val(d),a("#startTime").val(e),a("#endDate").val(f),a("#endTime").val(g),a("#details-body").hide(),a("#event-type-select").show(),a("#event-type-selected").hide(),a("#repeat-type-select").show(),a("#repeat-type-selected").hide(),a("#export-event, #delete-event, #edit-event, #save-changes").hide(),a("#add-event").show().css("width","100%"),a(".modal-footer").show(),a("#modal-form-body").show(),a("#details-body-title").html(k.newEventText),a(k.modalSelector).modal("show"),a("#event-type").on("change",function(){var b=a(this).val();"false"==b?(a("#event-type-select").show(),a("#event-type-selected").show()):"true"==b&&(a("#event-type-select").show(),a("#event-type-selected").hide())}),a("#repeat_select").on("change",function(){var b=a(this).val();"no"===b?"no"==b&&(a("#repeat-type-select").show(),a("#repeat-type-selected").hide()):(a("#repeat-type-select").show(),a("#repeat-type-selected").show())}),a("#colorp").spectrum("set",k.defaultColor),a("#add-event").off().on("click",function(b){if(0==a("input[name=title]").val().length)alert(k.emptyForm);else{formData=new FormData(a("#modal-form-body").get(0)),a("#file")[0]&&formData.append("file",a("#file")[0].files[0]);let b=flatpickr("#startDate").input.value+" "+flatpickr("#startTime",{allowInput:!0,dateFormat:"H:i",enableTime:!0,noCalendar:!0,time_24hr:!0}).input.value,c=flatpickr("#endDate").input.value+" "+flatpickr("#endTime",{allowInput:!0,dateFormat:"H:i",enableTime:!0,noCalendar:!0,time_24hr:!0}).input.value;formData.set("timezone",k.timezone),r(formData)}b.preventDefault()})};var q=function(b){let c=a(b.el),d=b.event._def,e=b.event._instance.range;var f=moment(e.start).utc().format("YYYY-MM-DD HH:mm"),g=moment(e.end).utc().format("YYYY-MM-DD HH:mm"),h=moment(e.start).utc().format("YYYY-MM-DD"),i=moment(e.start).utc().format("HH:mm"),j=moment(e.end).utc().format("YYYY-MM-DD"),l=moment(e.end).utc().format("HH:mm"),m=moment(e.end).isValid();null===e.end||"null"===e.end||!1==m?(Eend=h+" "+i,EaD="false"):(Eend=j+" "+l,EaD=d.allDay);var n="title="+encodeURIComponent(d.title)+"&start="+h+" "+i+"&end="+Eend+"&id="+d.publicId+"&allDay="+EaD+"&timezone="+k.timezone+"&original_id="+d.extendedProps.original_id;a.post(k.ajaxUiUpdate,n,function(){p.refetchEvents()})},r=function(b){a.ajax({url:k.ajaxEventQuickSave,data:b,type:"POST",cache:!1,processData:!1,contentType:!1,beforeSend:function(){a(".loadingDiv").show(),a(".modal-footer").hide()},error:function(){a(".loadingDiv").hide(),console.log(k.ajaxError)},success:function(b){a(".loadingDiv").hide(),1==b?(a(k.modalSelector).modal("hide"),p.refetchEvents()):(alert(k.failureAddEventMessage),a(".modal-footer").show())}})},s=function(b,c){a.ajax({type:"POST",url:k.ajaxRepeatCheck,data:"id="+b,cache:!1,beforeSend:function(){a(".loadingDiv").show()},error:function(){a(".loadingDiv").hide(),console.log(k.ajaxError)},success:function(d){a(".loadingDiv").hide(),"REP_FOUND"==d?(a(k.modalSelector).modal("hide"),a(k.modalEditPromptSelector+" .modal-header").html("<h4>"+k.eventText+l.title+"</h4>"),a(k.modalEditPromptSelector+" .modal-body-custom").css("padding","15px").html(k.repetitiveEventActionText),a(k.modalEditPromptSelector).modal("show"),a("[data-option=\"save-this\"]").unbind("click").on("click",function(d){t(b,c),a(k.modalEditPromptSelector).modal("hide"),a(k.modalSelector).modal("hide"),d.preventDefault()}),a("[data-option=\"save-repetitives\"]").unbind("click").on("click",function(d){t(b,c,"true"),a(k.modalEditPromptSelector).modal("hide"),a(k.modalSelector).modal("hide"),d.preventDefault()})):t(b,c)},error:function(){alert(k.generalFailureMessage)}})},t=function(b,c,d){d===void 0?editFormData.append("id",b):(editFormData.append("id",b),editFormData.append("rep_id",l.rep_id),editFormData.append("method","repetitive_event")),editFormData.append("otitle",l.title),a.ajax({type:"POST",url:k.ajaxEventEdit,data:c,cache:!1,processData:!1,contentType:!1,beforeSend:function(){a(".loadingDiv").show()},error:function(){a(".loadingDiv").hide(),console.log(k.ajaxError)},success:function(b){a(".loadingDiv").hide(),""==b?(a(k.modalSelector).modal("hide"),p.refetchEvents()):alert(k.failureUpdateEventMessage)},error:function(){alert(k.failureUpdateEventMessage)}})},u=function(b){var c="id="+b;a.ajax({type:"POST",url:k.ajaxRepeatCheck,data:{id:b},cache:!1,beforeSend:function(){a(".loadingDiv").show()},error:function(){a(".loadingDiv").hide(),console.log(k.ajaxError)},success:function(d){a(".loadingDiv").hide(),"REP_FOUND"==d?(a(k.modalSelector).modal("hide"),a(k.modalPromptSelector+" .modal-header").html("<h4>"+k.eventText+l.title+"</h4>"),a(k.modalPromptSelector+" .modal-body").html(k.repetitiveEventActionText),a(k.modalPromptSelector).modal("show"),a("[data-option=\"remove-this\"]").unbind("click").on("click",function(b){v(c),a(k.modalPromptSelector).modal("hide"),b.preventDefault()}),a("[data-option=\"remove-repetitives\"]").unbind("click").on("click",function(c){var d="id="+b+"&rep_id="+l.rep_id+"&method=repetitive_event&delete=yes";v(d),a(k.modalPromptSelector).modal("hide"),c.preventDefault()})):v(c)},error:function(){alert(k.generalFailureMessage)}})},v=function(b){var c=b+"&title="+encodeURIComponent(l.title)+"&start="+l.d_startDate;a.ajax({type:"POST",url:k.ajaxEventDelete,data:c,cache:!1,beforeSend:function(){a(".loadingDiv").show()},error:function(){a(".loadingDiv").hide(),console.log(k.ajaxError)},success:function(b){a(".loadingDiv").hide(),""==b?(a(k.modalSelector).modal("hide"),p.refetchEvents()):alert(k.failureDeleteEventMessage)}})},w=function(a,b,c,d){var e="&method=export&id="+encodeURIComponent(a)+"&title="+encodeURIComponent(b)+"&start_date="+encodeURIComponent(c)+"&end_date="+encodeURIComponent(d);window.location=k.ajaxEventExport+e};calendar.calendarImport=function(){txt="import="+encodeURIComponent(a("#import_content").val()),a.post(k.ajaxImport,txt,function(b){alert(b),p.refetchEvents(),a("#cal_import").modal("hide"),a("#import_content").val("")})};var x=function(a,b){for(var c=0;c<b.length;c++)a.hasOwnProperty(b[c])&&delete a[b[c]]};if(!0==k.filter){function b(){value=a(k.formSearchSelector+" input").val(),construct="search="+encodeURIComponent(value),a.post("includes/loader.php",construct,function(){p.refetchEvents()})}a(k.formFilterSelector).on("change",function(b){selected_value=a(this).val(),construct="filter="+encodeURIComponent(selected_value),a.post("includes/loader.php",construct,function(){p.refetchEvents()}),b.preventDefault()}),a(k.formSearchSelector).keypress(function(a){13==a.which&&(b(),a.preventDefault())}),a(k.formSearchSelector+" button").on("click",function(){b()}),window.onbeforeunload=function(){var b=new FormData;b.append("search",""),b.append("filter",a(k.formFilterSelector+" option:selected").val()),navigator.sendBeacon("includes/loader.php",b)}}}})})(jQuery);var editFormData,formData,calendar={};