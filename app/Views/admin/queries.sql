SELECT sum(`invoice_amt`) FROM `bill` WHERE `invoice_fy`="21-22"; 

// group By 
    SELECT sum(`invoice_amt`) , `invoice_fy` FROM `bill`GROUP BY `invoice_fy`

//between dates
SELECT SUM(`invoice_amt`) FROM `bill` WHERE (`invoice_dt` BETWEEN '1990-01-01' and '2022-01-01');

// FY and month
SELECT sum(`invoice_amt`) from bill where `invoice_mnth`=11 AND `invoice_fy`='20-21'

// DISTINCT sum
SELECT DISTINCT `contract_no`, SUM(DISTINCT `contract_value`),`invoice_fy` FROM `bill` GROUP BY `invoice_fy`;

// 