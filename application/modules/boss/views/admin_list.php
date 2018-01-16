<?php
    ######################################################################################################
    ## URL
    ######################################################################################################
    $base_url_page = base_url().'boss/notice/page_index';
    $func_url_page = base_url().'boss/notice/';
    $xls_url_page = base_url().'boss/xls/notice';
    $form_url_page = 'boss/notice/list_search';

    $page_name = '관리자 리스트';
    $find_type = '';
    $find_keyword = '';
    
    ######################################################################################################
    ## 검색 옵션
    ######################################################################################################

?>

<style>
    th
    {
        text-align: center;
    }

    .xlsbtn
    {
        float: left;
        width: 40px;
    }
</style>

<?php
    ############################################################################################################
    ## 타이틀
    ############################################################################################################
?>
<p><?=$page_name;?></p>

<hr>

<?php
    ############################################################################################################
    ## 검색, 엑셀 출력
    ############################################################################################################
?>
<article>
    <div class="xlsbtn">
        <a href="<?=$xls_url_page;?>" target="_blank" class="btn btn-success btn-sm" style="margin-bottom: 10px;">
            <i class="fa fa-table" aria-hidden="true"></i>
        </a>
    </div>
    <div style="float: left; width: 300px;">
        <?php echo form_open_multipart($form_url_page, array('autocomplete'=>"off", "class" => "form-inline", 'method' => 'get'));?>
            <select class="form-control input-sm" name="type" style="margin-right: 5px;">

                <!--수정영역-->
                <option value="idx" <?php if($find_type == 'idx') { echo 'selected'; } ?>>번호</option>
                <option value="show" <?php if($find_type == 'show') { echo 'selected'; } ?>>노출</option>
                <option value="subject" <?php if($find_type == 'subject') { echo 'selected'; } ?>>제목</option>
                <option value="makedate" <?php if($find_type == 'makedate') { echo 'selected'; } ?>>생성일</option>

            </select>

            <div class="input-group">
                <input type="text" class="form-control input-sm" placeholder="검색" name="keyword" value="<?=$find_keyword;?>">
                <span class="input-group-btn">
                    <button type="submit" class="btn btn-default btn-sm"> <i class="fa fa-search" aria-hidden="true"></i> </button>
                    <a href="<?=$base_url_page;?>" class="btn btn-default btn-sm"> <i class="fa fa-times" aria-hidden="true"></i> </a>
                </span>
            </div>
        <?php echo form_close();?>
    </div>

    <div style="float: right;">
        <a href="#" class="btn btn-sm btn-primary">신규 등록</a>
    </div>
    <div style="clear: both; margin-bottom: 10px;"></div>
</article>

<?php
    ############################################################################################################
    ## 본문
    ############################################################################################################
?>
<table class="table table-bordered table-condensed">
    <thead>
        <tr>
            <th>번호</th>
            <th>상태</th>
            <th>이름</th>
            <th>아이디</th>
            <th>최근 로그인</th>
            <th>생성일</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
        </tr>
    </tbody>
</table>