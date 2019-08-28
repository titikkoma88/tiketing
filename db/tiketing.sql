/*
 Navicat Premium Data Transfer

 Source Server         : 10.1.20.11
 Source Server Type    : MySQL
 Source Server Version : 50562
 Source Host           : 10.1.20.11:3306
 Source Schema         : tiketing

 Target Server Type    : MySQL
 Target Server Version : 50562
 File Encoding         : 65001

 Date: 22/08/2019 09:58:07
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for aplikasi
-- ----------------------------
DROP TABLE IF EXISTS `aplikasi`;
CREATE TABLE `aplikasi`  (
  `id_app` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `nama_app` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of aplikasi
-- ----------------------------
INSERT INTO `aplikasi` VALUES ('1', 'ast_desktop');
INSERT INTO `aplikasi` VALUES ('2', 'ast_web');

-- ----------------------------
-- Table structure for file
-- ----------------------------
DROP TABLE IF EXISTS `file`;
CREATE TABLE `file`  (
  `id_file` int(10) NOT NULL AUTO_INCREMENT,
  `nama` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `type` text CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `ukuran` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `reported` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `id_ticket` varchar(13) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  PRIMARY KEY (`id_file`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 640 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of file
-- ----------------------------
INSERT INTO `file` VALUES (84, 'CN_Ownership.jpg', 'image/jpeg', '25201', 'U0009', 'T201805300003');
INSERT INTO `file` VALUES (85, 'MUTASI_KAS_BANK.jpg', 'image/jpeg', '75797', 'U0005', 'T201805280002');
INSERT INTO `file` VALUES (86, 'GENERAL_LEDGER.jpg', 'image/jpeg', '13558', 'U0005', 'T201805280002');
INSERT INTO `file` VALUES (118, 'pengalihan_IPKL2.PNG', 'image/png', '14641', 'U0008', 'T201807060004');
INSERT INTO `file` VALUES (119, 'Capture.PNG', 'image/png', '59281', 'U0008', 'T201807060005');
INSERT INTO `file` VALUES (122, 'error_lot_master_tenancy.png', 'image/png', '27683', 'U0006', 'T201807090008');
INSERT INTO `file` VALUES (126, 'PL_SPK.PNG', 'image/png', '28815', 'U0008', 'T201807090010');
INSERT INTO `file` VALUES (144, 'Update_SPK_Lama_(SPK_Direct)_09072018.zip', 'application/x-zip-compressed', '13435', 'U0011', 'T201807090009');
INSERT INTO `file` VALUES (149, 'x_post_alloc.sql', 'application/octet-stream', '49350', 'U0011', 'T201807110011');
INSERT INTO `file` VALUES (151, 'Pengalihan_Hak.rar', 'application/octet-stream', '9882', 'U0011', 'T201807060004');
INSERT INTO `file` VALUES (152, 'error_import.PNG', 'image/png', '24499', 'U0008', 'T201807110013');
INSERT INTO `file` VALUES (153, 'error_import2.PNG', 'image/png', '22421', 'U0008', 'T201807110013');
INSERT INTO `file` VALUES (154, 'Contract_Signing_Entry_Standing.png', 'image/png', '85425', 'U0009', 'T201807160014');
INSERT INTO `file` VALUES (155, 'Kartu_Piutang_Konsumen.jpg', 'image/jpeg', '20998', 'U0009', 'T201807180015');
INSERT INTO `file` VALUES (156, '1s.PNG', 'image/png', '46031', 'U0008', 'T201807180016');
INSERT INTO `file` VALUES (157, '2s.PNG', 'image/png', '35963', 'U0008', 'T201807180016');
INSERT INTO `file` VALUES (158, 'data.jpg', 'image/jpeg', '11826', 'U0011', 'T201807180016');
INSERT INTO `file` VALUES (159, 'master_pajak.jpg', 'image/jpeg', '10127', 'U0011', 'T201807180016');
INSERT INTO `file` VALUES (160, 'data.jpg', 'image/jpeg', '11826', 'U0011', 'T201807180016');
INSERT INTO `file` VALUES (161, 'master_pajak.jpg', 'image/jpeg', '10127', 'U0011', 'T201807180016');
INSERT INTO `file` VALUES (163, 'tes_graphon.jpg', 'image/jpeg', '18036', 'U0011', 'T201807180015');
INSERT INTO `file` VALUES (168, 'Kartu_Piutang_Konsumen_YD-GF-07.jpg', 'image/jpeg', '20521', 'U0009', 'T201807250017');
INSERT INTO `file` VALUES (175, 'ar_laporan_piutang_konsumen.rpt', 'application/octet-stream', '17032', 'U0011', 'T201807250017');
INSERT INTO `file` VALUES (178, 'user_active1.jpg', 'image/jpeg', '39914', 'U0006', 'T201807270018');
INSERT INTO `file` VALUES (182, 'std_chrg_ownership.jpg', 'image/jpeg', '82105', 'U0006', 'T201807310019');
INSERT INTO `file` VALUES (201, 'Error_Input_Activity_di_PL.png', 'image/x-png', '83693', 'U0007', 'T201808020020');
INSERT INTO `file` VALUES (203, 'Update_PL_Activity_Master_20180802.zip', 'application/x-zip-compressed', '28928', 'U0011', 'T201808020020');
INSERT INTO `file` VALUES (213, 'Update_PL_Activity_Master_20180802.zip', 'application/x-zip-compressed', '28928', 'U0011', 'T201808020020');
INSERT INTO `file` VALUES (214, 'Update_Booking_Estimate_Add_Detail_25072018.zip', 'application/x-zip-compressed', '47478', 'U0011', 'T201807090010');
INSERT INTO `file` VALUES (224, 'print_kwitansi_OR_auto.jpg', 'image/jpeg', '33265', 'U0006', 'T201808030021');
INSERT INTO `file` VALUES (255, 'Screenshot_1.png', 'image/png', '12089', 'U0011', 'T201807090008');
INSERT INTO `file` VALUES (256, 'de_tm.zip', 'application/x-zip-compressed', '71714', 'U0011', 'T201807090008');
INSERT INTO `file` VALUES (257, '1.PNG', 'image/png', '48759', 'U0008', 'T201808090022');
INSERT INTO `file` VALUES (258, '2.PNG', 'image/png', '35661', 'U0008', 'T201808090022');
INSERT INTO `file` VALUES (270, 'Screenshot_1.jpg', 'image/jpeg', '13644', 'U0011', 'T201807250017');
INSERT INTO `file` VALUES (272, 'tenancy.jpg', 'image/jpeg', '10098', 'U0011', 'T201807160014');
INSERT INTO `file` VALUES (274, 'Double_key_Master_Activity.PNG', 'image/png', '55873', 'U0008', 'T201808100023');
INSERT INTO `file` VALUES (275, 'Double_key_Master_ActivitySP.PNG', 'image/png', '49319', 'U0008', 'T201808100023');
INSERT INTO `file` VALUES (276, 'Total_Budget_Berbeda.PNG', 'image/png', '80874', 'U0008', 'T201808100023');
INSERT INTO `file` VALUES (291, 'MOD_-_Report_Tune_Up_03-08-2018.zip', 'application/x-zip-compressed', '15547', 'U0011', 'T201807270018');
INSERT INTO `file` VALUES (294, '2018-08-10-SA_debtor_va.7z', 'application/octet-stream', '11386', 'U0011', 'T201807060007');
INSERT INTO `file` VALUES (300, 'debit_note_AP.jpg', 'image/jpeg', '26634', 'U0006', 'T201808140024');
INSERT INTO `file` VALUES (302, 'pengajuan_KPR_0.PNG', 'image/png', '17421', 'U0008', 'T201808150025');
INSERT INTO `file` VALUES (303, 'trx_type_DP.PNG', 'image/png', '23880', 'U0008', 'T201808150025');
INSERT INTO `file` VALUES (304, 'failed_unpost.PNG', 'image/png', '26801', 'U0008', 'T201808150025');
INSERT INTO `file` VALUES (306, '2018-08-10-SA_debtor_va.rar', 'application/octet-stream', '12624', 'U0011', 'T201807060007');
INSERT INTO `file` VALUES (307, 'Update_AP_Debit_Note_20180816.rar', 'application/octet-stream', '39100', 'U0014', 'T201808140024');
INSERT INTO `file` VALUES (325, 'Script.rar', 'application/octet-stream', '388', 'U0014', 'T201808100023');
INSERT INTO `file` VALUES (326, 'validasi_pengajuan_kredit.rar', 'application/octet-stream', '11312', 'U0011', 'T201808150025');
INSERT INTO `file` VALUES (327, 'CN_ownership_allocation.jpg', 'image/jpeg', '29077', 'U0006', 'T201808270026');
INSERT INTO `file` VALUES (329, 'Form_Ext._General_Journal.jpg', 'image/jpeg', '99219', 'U0007', 'T201808270027');
INSERT INTO `file` VALUES (331, 'pengajuan_kredit.rar', 'application/octet-stream', '13493', 'U0011', 'T201808150025');
INSERT INTO `file` VALUES (332, 'std_chrg_ownership_1.jpg', 'image/jpeg', '21689', 'U0006', 'T201808280028');
INSERT INTO `file` VALUES (333, 'std_chrg_ownership_2.jpg', 'image/jpeg', '21948', 'U0006', 'T201808280028');
INSERT INTO `file` VALUES (335, 'stsposted.PNG', 'image/png', '9785', 'U0008', 'T201808310029');
INSERT INTO `file` VALUES (336, 'stsSPR.PNG', 'image/png', '27799', 'U0008', 'T201808310029');
INSERT INTO `file` VALUES (337, 'BookingEntry.PNG', 'image/png', '24209', 'U0008', 'T201808310029');
INSERT INTO `file` VALUES (338, 'TotAmt_0.PNG', 'image/png', '30570', 'U0008', 'T201809040030');
INSERT INTO `file` VALUES (339, 'Rounding.png', 'image/png', '25487', 'U0014', 'T201809040030');
INSERT INTO `file` VALUES (340, 'Rounding.png', 'image/png', '25487', 'U0008', 'T201809060031');
INSERT INTO `file` VALUES (341, 'Update_SPK_Entry_Rounding_Default_20180907.rar', 'application/octet-stream', '20083', 'U0014', 'T201809060031');
INSERT INTO `file` VALUES (342, 'jurnal_PPh1.png', 'image/png', '11342', 'U0006', 'T201809120032');
INSERT INTO `file` VALUES (343, 'jurnal_PPh2.png', 'image/png', '48892', 'U0006', 'T201809120032');
INSERT INTO `file` VALUES (346, 'piutang.PNG', 'image/png', '78578', 'U0008', 'T201809140033');
INSERT INTO `file` VALUES (347, 'Refund_OR.PNG', 'image/png', '52483', 'U0008', 'T201809140033');
INSERT INTO `file` VALUES (348, 'pym_plan.PNG', 'image/png', '18678', 'U0008', 'T201809140033');
INSERT INTO `file` VALUES (349, 'Revision.PNG', 'image/png', '17327', 'U0008', 'T201809140033');
INSERT INTO `file` VALUES (350, 'Kartu_Hutang_nt_bal.PNG', 'image/png', '32344', 'U0008', 'T201809140034');
INSERT INTO `file` VALUES (351, 'DN1.PNG', 'image/png', '25267', 'U0008', 'T201809140034');
INSERT INTO `file` VALUES (352, 'AP_debit_note.rar', 'application/octet-stream', '19609', 'U0011', 'T201809140034');
INSERT INTO `file` VALUES (353, 'AP_invoice_Entry.PNG', 'image/png', '22896', 'U0008', 'T201809170035');
INSERT INTO `file` VALUES (354, 'Ap_Posting.PNG', 'image/png', '42904', 'U0008', 'T201809170035');
INSERT INTO `file` VALUES (355, 'Audit_user_null.PNG', 'image/png', '23266', 'U0008', 'T201809170035');
INSERT INTO `file` VALUES (356, 'Capture_AP_Invoice.png', 'image/png', '88086', 'U0014', 'T201809170035');
INSERT INTO `file` VALUES (357, 'VA_OR_Auto.jpg', 'image/jpeg', '84465', 'U0011', 'T201807110012');
INSERT INTO `file` VALUES (358, 'xar_post_receipt_std.sql', 'application/octet-stream', '23650', 'U0011', 'T201809120032');
INSERT INTO `file` VALUES (359, 'xsa_savehis.rar', 'application/octet-stream', '3098', 'U0011', 'T201808310029');
INSERT INTO `file` VALUES (360, 'Doc1.docx', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', '11354', 'U0011', 'T201808310029');
INSERT INTO `file` VALUES (362, 'sp_Revision_PymPln.rar', 'application/octet-stream', '3788', 'U0011', 'T201809140033');
INSERT INTO `file` VALUES (363, 'kartu_piutang_konsumen1.jpg', 'image/jpeg', '19943', 'U0006', 'T201809190036');
INSERT INTO `file` VALUES (368, 'New_folder.rar', 'application/octet-stream', '6298', 'U0011', 'T201809140033');
INSERT INTO `file` VALUES (369, 'assign_meters_management1.jpg', 'image/jpeg', '32861', 'U0006', 'T201809240038');
INSERT INTO `file` VALUES (370, 'assign_meters_management2.jpg', 'image/jpeg', '30047', 'U0006', 'T201809240038');
INSERT INTO `file` VALUES (371, 'Update_View_Lot_Assign.rar', 'application/octet-stream', '439', 'U0014', 'T201809240038');
INSERT INTO `file` VALUES (372, 'Meter_Assign.png', 'image/png', '22596', 'U0014', 'T201809240038');
INSERT INTO `file` VALUES (373, 'closing_SPK.PNG', 'image/png', '7072', 'U0008', 'T201809260039');
INSERT INTO `file` VALUES (374, 'kwitansi_KM.jpg', 'image/jpeg', '31618', 'U0006', 'T201809270040');
INSERT INTO `file` VALUES (375, 'PPHFlag.PNG', 'image/png', '91357', 'U0008', 'T201809280041');
INSERT INTO `file` VALUES (376, 'pphFlagg.PNG', 'image/png', '90764', 'U0008', 'T201809280041');
INSERT INTO `file` VALUES (378, 'pphTrx.PNG', 'image/png', '22079', 'U0008', 'T201809280041');
INSERT INTO `file` VALUES (379, 'Form_CS.jpg', 'image/jpeg', '27872', 'U0009', 'T201809280042');
INSERT INTO `file` VALUES (380, 'Review_form_CS.jpg', 'image/jpeg', '14192', 'U0009', 'T201809280042');
INSERT INTO `file` VALUES (381, 'Piutang280918.png', 'image/png', '40600', 'U0008', 'T201809280041');
INSERT INTO `file` VALUES (382, 'kwitansi_KM.jpg', 'image/jpeg', '22042', 'U0011', 'T201809270040');
INSERT INTO `file` VALUES (383, 'pph_flag.jpg', 'image/jpeg', '13832', 'U0011', 'T201809280041');
INSERT INTO `file` VALUES (391, 'posting_CN_ownership_1.jpg', 'image/jpeg', '22369', 'U0006', 'T201810010045');
INSERT INTO `file` VALUES (392, 'posting_CN_ownership_2.jpg', 'image/jpeg', '21562', 'U0006', 'T201810010045');
INSERT INTO `file` VALUES (394, 'detail_allocation_kosong.jpg', 'image/jpeg', '96047', 'U0011', 'T201810010045');
INSERT INTO `file` VALUES (396, 'customer_service.rar', 'application/octet-stream', '42153', 'U0011', 'T201809280042');
INSERT INTO `file` VALUES (399, '2018-09-02-docadm.7z', 'application/octet-stream', '23284', 'U0011', 'T201808090022');
INSERT INTO `file` VALUES (400, '2018-09-02-docadm.rar', 'application/octet-stream', '25473', 'U0011', 'T201808090022');
INSERT INTO `file` VALUES (402, 'Error_BAST1.PNG', 'image/png', '23051', 'U0008', 'T201810040046');
INSERT INTO `file` VALUES (403, 'Error_BAST2.PNG', 'image/png', '24947', 'U0008', 'T201810040046');
INSERT INTO `file` VALUES (404, 'ErorBAST051018.jpeg', 'image/jpeg', '51092', 'U0008', 'T201810040046');
INSERT INTO `file` VALUES (405, 'unpost_credit_note_1.jpg', 'image/jpeg', '23751', 'U0006', 'T201810050047');
INSERT INTO `file` VALUES (407, 'Update_SPK_Close_Change_Tax_20181008.rar', 'application/octet-stream', '86913', 'U0014', 'T201809260039');
INSERT INTO `file` VALUES (408, 'Piutang_Awal01.PNG', 'image/png', '38481', 'U0008', 'T201810080048');
INSERT INTO `file` VALUES (409, 'Revision01.PNG', 'image/png', '17210', 'U0008', 'T201810080048');
INSERT INTO `file` VALUES (410, 'Piutang_Akhir01.PNG', 'image/png', '36663', 'U0008', 'T201810080048');
INSERT INTO `file` VALUES (411, 'sales_cancel_lokal.jpg', 'image/jpeg', '19720', 'U0011', 'T201808310029');
INSERT INTO `file` VALUES (412, 'sales_cancel_graphon.jpg', 'image/jpeg', '22496', 'U0011', 'T201808310029');
INSERT INTO `file` VALUES (413, 'proyeksi_KPR.jpg', 'image/jpeg', '16997', 'U0011', 'T201809190037');
INSERT INTO `file` VALUES (414, 'xsa_savehis.sql', 'application/octet-stream', '22082', 'U0011', 'T201808310029');
INSERT INTO `file` VALUES (415, 'Activity01.PNG', 'image/png', '67144', 'U0008', 'T201810110049');
INSERT INTO `file` VALUES (416, 'Activity02.PNG', 'image/png', '40803', 'U0008', 'T201810110049');
INSERT INTO `file` VALUES (417, 'SPK_Induk.png', 'image/png', '35637', 'U0014', 'T201810110049');
INSERT INTO `file` VALUES (418, 'SPK__Entry_SHNN03.png', 'image/png', '11040', 'U0014', 'T201810110049');
INSERT INTO `file` VALUES (419, 'Update_SPK_Direct_Close_20181012.rar', 'application/octet-stream', '81718', 'U0014', 'T201809260039');
INSERT INTO `file` VALUES (421, 'ProgressInvoice01.PNG', 'image/png', '47295', 'U0008', 'T201810160051');
INSERT INTO `file` VALUES (422, 'Realized01.PNG', 'image/png', '16695', 'U0008', 'T201810160051');
INSERT INTO `file` VALUES (423, 'Addendum.PNG', 'image/png', '34838', 'U0008', 'T201810160051');
INSERT INTO `file` VALUES (424, 'SPK_Close01.PNG', 'image/png', '5599', 'U0008', 'T201810160051');
INSERT INTO `file` VALUES (425, 'Update_View_SPK_Close_20181016.rar', 'application/octet-stream', '750', 'U0014', 'T201810160051');
INSERT INTO `file` VALUES (426, 'Update_SPK_Close_Direct_20181016_-_Rev.rar', 'application/octet-stream', '6961', 'U0014', 'T201810160052');
INSERT INTO `file` VALUES (427, 'audit_date_GL.rar', 'application/octet-stream', '43033', 'U0011', 'T201810010043');
INSERT INTO `file` VALUES (428, 'Error_admin_PPJB.PNG', 'image/png', '37184', 'U0008', 'T201810240054');
INSERT INTO `file` VALUES (429, 'doc_adm.rar', 'application/octet-stream', '25327', 'U0011', 'T201810240054');
INSERT INTO `file` VALUES (430, 'sdate-edate30102018.PNG', 'image/png', '61850', 'U0008', 'T201810300055');
INSERT INTO `file` VALUES (431, 'progress_project_spk_direct_1.jpg', 'image/jpeg', '26886', 'U0006', 'T201810310056');
INSERT INTO `file` VALUES (432, 'SPK_progress.png', 'image/png', '40739', 'U0014', 'T201810310056');
INSERT INTO `file` VALUES (433, 'source_code_null_1.jpg', 'image/jpeg', '72643', 'U0006', 'T201811050057');
INSERT INTO `file` VALUES (434, 'MOD_-_Posting_Billing.rar', 'application/octet-stream', '11664', 'U0011', 'T201810220053');
INSERT INTO `file` VALUES (435, 'sp_cek_pym_plan_revise.rar', 'application/octet-stream', '1675', 'U0011', 'T201810080048');
INSERT INTO `file` VALUES (436, 'perbaikan_SP_posting_source_code_null.rar', 'application/octet-stream', '22501', 'U0011', 'T201811050057');
INSERT INTO `file` VALUES (437, 'fasset.rar', 'application/octet-stream', '12094', 'U0011', 'T201811050057');
INSERT INTO `file` VALUES (438, 'IMG_20181109_090842.jpg', 'image/jpeg', '48270', 'U0018', 'T201811090058');
INSERT INTO `file` VALUES (439, 'IMG_20181109_090727.jpg', 'image/jpeg', '29135', 'U0018', 'T201811090058');
INSERT INTO `file` VALUES (440, 'approve_contract_renewal.jpg', 'image/jpeg', '12103', 'U0006', 'T201811120059');
INSERT INTO `file` VALUES (441, 'Update_Location_Form_Approve_Contract_Renewal_20181112.rar', 'application/octet-stream', '350', 'U0014', 'T201811120059');
INSERT INTO `file` VALUES (442, 'tenancy_1.jpg', 'image/jpeg', '24505', 'U0006', 'T201811120060');
INSERT INTO `file` VALUES (443, 'Approval_Contract_Renewal.png', 'image/png', '14202', 'U0014', 'T201811120059');
INSERT INTO `file` VALUES (444, 'generate_billing_KM_1.jpg', 'image/jpeg', '97783', 'U0006', 'T201811140061');
INSERT INTO `file` VALUES (445, 'data_billing.png', 'image/png', '67130', 'U0014', 'T201811140061');
INSERT INTO `file` VALUES (446, 'data_billing_yang_akan_diposting_jadi_invoice.png', 'image/png', '30905', 'U0014', 'T201811140061');
INSERT INTO `file` VALUES (447, 'pm_tenancy_std.rar', 'application/octet-stream', '49984', 'U0011', 'T201811120060');
INSERT INTO `file` VALUES (448, 'Untitled.png', 'image/png', '27272', 'U0011', 'T201811120060');
INSERT INTO `file` VALUES (449, 'FA1.jpg', 'image/jpeg', '11142', 'U0006', 'T201811230062');
INSERT INTO `file` VALUES (450, 'Capture_Jurnal.png', 'image/png', '58401', 'U0014', 'T201811230062');
INSERT INTO `file` VALUES (451, '22.PNG', 'image/png', '16078', 'U0008', 'T201811260063');
INSERT INTO `file` VALUES (452, 'update_form.7z', 'application/octet-stream', '6248', 'U0011', 'T201811260063');
INSERT INTO `file` VALUES (453, 'update_form.rar', 'application/octet-stream', '6943', 'U0011', 'T201811260063');
INSERT INTO `file` VALUES (454, 'CN_ownership_mie.jpg', 'image/jpeg', '14376', 'U0006', 'T201812040064');
INSERT INTO `file` VALUES (455, 'CN_ownership_mie1.jpg', 'image/jpeg', '11266', 'U0006', 'T201812040064');
INSERT INTO `file` VALUES (456, 'generate_rate_error.jpg', 'image/jpeg', '14726', 'U0006', 'T201812110065');
INSERT INTO `file` VALUES (457, 'Pms.rar', 'application/octet-stream', '7905', 'U0011', 'T201812110065');
INSERT INTO `file` VALUES (458, 'update_20181211.rar', 'application/octet-stream', '59787', 'U0011', 'T201812110065');
INSERT INTO `file` VALUES (459, 'NE30b1.PNG', 'image/png', '15342', 'U0008', 'T201812140066');
INSERT INTO `file` VALUES (460, 'NE30b2.PNG', 'image/png', '10116', 'U0008', 'T201812140066');
INSERT INTO `file` VALUES (461, 'NE30b3.PNG', 'image/png', '56176', 'U0008', 'T201812140066');
INSERT INTO `file` VALUES (462, 'orsales.JPG', 'image/jpeg', '13090', 'U0011', 'T201812140066');
INSERT INTO `file` VALUES (463, 'input_bukti_potong.JPG', 'image/jpeg', '79734', 'U0011', 'T201812140066');
INSERT INTO `file` VALUES (464, 'Debit_Note.PNG', 'image/png', '29937', 'U0017', 'T201812190067');
INSERT INTO `file` VALUES (465, 'FrmCancel01.PNG', 'image/png', '18036', 'U0008', 'T201812190068');
INSERT INTO `file` VALUES (466, 'piutang02.PNG', 'image/png', '56074', 'U0008', 'T201812190068');
INSERT INTO `file` VALUES (467, 'Update_Jurnal_AP_Debit_Note_20181227.rar', 'application/octet-stream', '28386', 'U0014', 'T201812190067');
INSERT INTO `file` VALUES (468, 'Capture_Jurnal_Debit_Note_AP.png', 'image/png', '25346', 'U0014', 'T201812190067');
INSERT INTO `file` VALUES (469, 'Update_Nilai_Total_OR_Sales_Cancel_20181227.rar', 'application/octet-stream', '42768', 'U0014', 'T201812190068');
INSERT INTO `file` VALUES (470, 'Capture_Sales_Cancel_A8-3.png', 'image/png', '12290', 'U0014', 'T201812190068');
INSERT INTO `file` VALUES (471, 'dn_print.PNG', 'image/png', '34584', 'U0008', 'T201812280069');
INSERT INTO `file` VALUES (472, 'alloc.PNG', 'image/png', '31512', 'U0008', 'T201812280069');
INSERT INTO `file` VALUES (473, 'Capture_Print_Out_Jurnal_Debit_Note.png', 'image/png', '10028', 'U0014', 'T201812280069');
INSERT INTO `file` VALUES (474, 'Aging1.PNG', 'image/png', '12453', 'U0008', 'T201901030071');
INSERT INTO `file` VALUES (475, 'aging2.PNG', 'image/png', '25880', 'U0008', 'T201901030071');
INSERT INTO `file` VALUES (476, '1.png', 'image/png', '10396', 'U0014', 'T201812280069');
INSERT INTO `file` VALUES (477, '2.png', 'image/png', '10390', 'U0014', 'T201812280069');
INSERT INTO `file` VALUES (478, 'Aging.png', 'image/png', '42702', 'U0014', 'T201901030071');
INSERT INTO `file` VALUES (479, 'KwitansiORAuto01.PNG', 'image/png', '12413', 'U0008', 'T201901080072');
INSERT INTO `file` VALUES (480, 'ar_kwitansi_by_doc_no_estates_jc.rpt', 'application/x-rpt', '10035', 'U0008', 'T201901080072');
INSERT INTO `file` VALUES (481, 'kartu_hutang.PNG', 'image/png', '22027', 'U0008', 'T201901080073');
INSERT INTO `file` VALUES (482, 'Update_Print_Kwitansi_OR_Auto_20190901.rar', 'application/octet-stream', '78885', 'U0014', 'T201901080072');
INSERT INTO `file` VALUES (483, 'data_tidak_filter_entity.jpg', 'image/jpeg', '19439', 'U0006', 'T201901100074');
INSERT INTO `file` VALUES (484, 'a.png', 'image/png', '99668', 'U0005', 'T201901110075');
INSERT INTO `file` VALUES (485, 'b.jpg', 'image/jpeg', '34437', 'U0005', 'T201901110075');
INSERT INTO `file` VALUES (486, 'Update_Filter_Project_Form_Sertifikat_Induk_20190114.rar', 'application/octet-stream', '22229', 'U0014', 'T201901100074');
INSERT INTO `file` VALUES (487, 'sertifikat_1.jpg', 'image/jpeg', '34364', 'U0006', 'T201901160077');
INSERT INTO `file` VALUES (488, 'sertifikat_2.jpg', 'image/jpeg', '36256', 'U0006', 'T201901160077');
INSERT INTO `file` VALUES (491, '01.PNG', 'image/png', '23599', 'U0008', 'T201901160079');
INSERT INTO `file` VALUES (492, '02.PNG', 'image/png', '64661', 'U0008', 'T201901160079');
INSERT INTO `file` VALUES (493, '03.PNG', 'image/png', '59958', 'U0008', 'T201901160079');
INSERT INTO `file` VALUES (498, 'SPK_Close.png', 'image/png', '60497', 'U0014', 'T201901160079');
INSERT INTO `file` VALUES (501, '3.PNG', 'image/png', '15653', 'U0008', 'T201901220081');
INSERT INTO `file` VALUES (502, 'Text_Box_Close_SPK.PNG', 'image/png', '17969', 'U0008', 'T201901120076');
INSERT INTO `file` VALUES (504, 'Update_SPK_Close_Tambah_Notif_20190123.rar', 'application/octet-stream', '13438', 'U0014', 'T201901120076');
INSERT INTO `file` VALUES (505, 'E3901.PNG', 'image/png', '12426', 'U0008', 'T201901160078');
INSERT INTO `file` VALUES (506, 'E3902.PNG', 'image/png', '20576', 'U0008', 'T201901160078');
INSERT INTO `file` VALUES (507, 'E3903.PNG', 'image/png', '41386', 'U0008', 'T201901160078');
INSERT INTO `file` VALUES (508, 'E3904.PNG', 'image/png', '13454', 'U0008', 'T201901160078');
INSERT INTO `file` VALUES (510, 'OR_auto.jpg', 'image/jpeg', '69465', 'U0005', 'T201901300082');
INSERT INTO `file` VALUES (511, 'Update_Panjang_Nama_Konsumen_Booking_Entry_20190130.rar', 'application/octet-stream', '12273', 'U0014', 'T201901020070');
INSERT INTO `file` VALUES (512, 'Update_VA_CIMB_Niaga_20190130.rar', 'application/octet-stream', '63632', 'U0014', 'T201901180080');
INSERT INTO `file` VALUES (513, 'Close01.PNG', 'image/png', '14487', 'U0008', 'T201901300083');
INSERT INTO `file` VALUES (514, 'SPK01.PNG', 'image/png', '36269', 'U0008', 'T201901300083');
INSERT INTO `file` VALUES (515, 'inv_manual_test_1.jpg', 'image/jpeg', '25556', 'U0006', 'T201902010084');
INSERT INTO `file` VALUES (516, 'inv_manual_test.jpg', 'image/jpeg', '32642', 'U0006', 'T201902010084');
INSERT INTO `file` VALUES (517, 'pembelian_tanah.jpg', 'image/jpeg', '17824', 'U0006', 'T201902070085');
INSERT INTO `file` VALUES (531, '20190221111051_err02.PNG', 'image/png', '14893', 'U0008', 'T201902210086');
INSERT INTO `file` VALUES (532, '20190221111051_Err01.PNG', 'image/png', '15556', 'U0008', 'T201902210086');
INSERT INTO `file` VALUES (533, '20190221111051_err03.PNG', 'image/png', '30047', 'U0008', 'T201902210086');
INSERT INTO `file` VALUES (534, '20190221172356_artax01.png', 'image/png', '18125', 'U0008', 'T201902210086');
INSERT INTO `file` VALUES (535, '20190222135043_settingan_tax.png', 'image/png', '46351', 'U0011', 'T201902210086');
INSERT INTO `file` VALUES (536, '20190226141611_SPK_Close_1.PNG', 'image/png', '21472', 'U0008', 'T201902260087');
INSERT INTO `file` VALUES (537, '20190226141611_SPK_Close_2.PNG', 'image/png', '39960', 'U0008', 'T201902260087');
INSERT INTO `file` VALUES (538, '20190226141611_SPK_Close_3.PNG', 'image/png', '5911', 'U0008', 'T201902260087');
INSERT INTO `file` VALUES (539, '20190226141611_SPK_Close_4.PNG', 'image/png', '33001', 'U0008', 'T201902260087');
INSERT INTO `file` VALUES (540, '20190304143300_Ownership1.PNG', 'image/png', '5366', 'U0008', 'T201903040088');
INSERT INTO `file` VALUES (541, '20190304143300_ownership2.PNG', 'image/png', '13795', 'U0008', 'T201903040088');
INSERT INTO `file` VALUES (542, '20190306152115_Capture.JPG', 'image/jpeg', '11430', 'U0011', 'T201903040088');
INSERT INTO `file` VALUES (543, 'C26.png', 'image/png', '10862', 'U0008', 'T201903040088');
INSERT INTO `file` VALUES (544, '20190306171707_2019-03-06-invoice_manual.rar', 'application/octet-stream', '34899', 'U0011', 'T201902010084');
INSERT INTO `file` VALUES (545, '20190308113245_Capture.JPG', 'image/jpeg', '11941', 'U0011', 'T201903040088');
INSERT INTO `file` VALUES (546, '20190308113245_Capture1.JPG', 'image/jpeg', '12624', 'U0011', 'T201903040088');
INSERT INTO `file` VALUES (547, 'Tagihan2.PNG', 'image/png', '24411', 'U0008', 'T201903040088');
INSERT INTO `file` VALUES (548, 'Piutangc26.png', 'image/png', '17595', 'U0008', 'T201903040088');
INSERT INTO `file` VALUES (549, 'PPJBc26.png', 'image/png', '16380', 'U0008', 'T201903040088');
INSERT INTO `file` VALUES (550, '20190312133400_Capture.JPG', 'image/jpeg', '18591', 'U0011', 'T201903040088');
INSERT INTO `file` VALUES (551, '20190312134554_2019-03-12-serahterima.7z', 'application/octet-stream', '9651', 'U0011', 'T201903040088');
INSERT INTO `file` VALUES (554, '20190312151159_pagenotefound.png', 'image/png', '12902', 'U0008', 'T201903040088');
INSERT INTO `file` VALUES (555, '20190312144831_2019-03-12-serahterima.rar', 'application/octet-stream', '10610', 'U0011', 'T201903040088');
INSERT INTO `file` VALUES (556, '20190313083032_Kartu_Hutang.png', 'image/png', '97701', 'U0008', 'T201903130089');
INSERT INTO `file` VALUES (557, '20190313083032_Addendum.png', 'image/png', '13092', 'U0008', 'T201903130089');
INSERT INTO `file` VALUES (558, '20190313083032_Ret1.PNG', 'image/png', '5923', 'U0008', 'T201903130089');
INSERT INTO `file` VALUES (559, '20190320145926_detail_pembelian_tanah_1.jpg', 'image/jpeg', '25586', 'U0006', 'T201903200091');
INSERT INTO `file` VALUES (560, '20190321150127_or.jpg', 'image/jpeg', '15036', 'U0005', 'T201903210093');
INSERT INTO `file` VALUES (562, 'detail_pembelian_tanah_2.jpg', 'image/jpeg', '25180', 'U0006', 'T201903190090');
INSERT INTO `file` VALUES (563, '20190401103443_xar_gen_interest.sql', 'application/octet-stream', '29094', 'U0011', 'T201901110075');
INSERT INTO `file` VALUES (564, '20190404115524_1.jpg', 'image/jpeg', '22467', 'U0005', 'T201904040094');
INSERT INTO `file` VALUES (565, '20190404130231_2.jpg', 'image/jpeg', '24006', 'U0005', 'T201904040094');
INSERT INTO `file` VALUES (566, '20190404140222_sp_cb_post.rar', 'application/octet-stream', '6672', 'U0011', 'T201904040094');
INSERT INTO `file` VALUES (568, '20190408152812_1.jpg', 'image/jpeg', '17982', 'U0005', 'T201904080095');
INSERT INTO `file` VALUES (569, '20190408152812_2.jpg', 'image/jpeg', '23643', 'U0005', 'T201904080095');
INSERT INTO `file` VALUES (570, '20190408152812_3.jpg', 'image/jpeg', '55393', 'U0005', 'T201904080095');
INSERT INTO `file` VALUES (571, '20190424172359_pembelian_tanah_3.JPG', 'image/jpeg', '13267', 'U0006', 'T201904240096');
INSERT INTO `file` VALUES (572, '20190424172712_sertifikat_induk_.jpg', 'image/jpeg', '13911', 'U0006', 'T201904240097');
INSERT INTO `file` VALUES (573, '20190426123642_Update_SPK_Progress_20190426.rar', 'application/octet-stream', '26414', 'U0011', 'T201903130089');
INSERT INTO `file` VALUES (574, '20190426124651_Update_Kolom_SPH_Entry_Detail_26042019.rar', 'application/octet-stream', '33418', 'U0011', 'T201903190090');
INSERT INTO `file` VALUES (575, '20190426163433_Update_Kolom_SPH_Entry_Detail_26042019.rar', 'application/octet-stream', '74961', 'U0011', 'T201903190090');
INSERT INTO `file` VALUES (576, '20190429112244_pembelian_tanah_3.JPG', 'image/jpeg', '19802', 'U0006', 'T201904290099');
INSERT INTO `file` VALUES (577, '20190429134134_1.jpg', 'image/jpeg', '33281', 'U0005', 'T201904290100');
INSERT INTO `file` VALUES (578, '20190429134134_2.jpg', 'image/jpeg', '33585', 'U0005', 'T201904290100');
INSERT INTO `file` VALUES (579, '20190429163400_1.jpg', 'image/jpeg', '67836', 'U0005', 'T201904290101');
INSERT INTO `file` VALUES (580, '20190430162850_Hasil_Deskripsi_Jurnal_SPK_Close.png', 'image/png', '12333', 'U0014', 'T201901300083');
INSERT INTO `file` VALUES (581, '20190430162850_Update_Deskripsi_Jurnal_Closing_SPK_20190430.rar', 'application/octet-stream', '7474', 'U0014', 'T201901300083');
INSERT INTO `file` VALUES (582, '20190502140818_1.jpg', 'image/jpeg', '12782', 'U0005', 'T201905020102');
INSERT INTO `file` VALUES (606, '20190506132119_spk_mie1.jpg', 'image/jpeg', '22544', 'U0006', 'T201905060104');
INSERT INTO `file` VALUES (607, '20190507113303_Update_Form_SPK_Progress_Direct_20190507.rar', 'application/octet-stream', '26507', 'U0014', 'T201905060104');
INSERT INTO `file` VALUES (608, '20190513131918_AJB.png', 'image/png', '21065', 'U0008', 'T201905130106');
INSERT INTO `file` VALUES (609, 'AJB.png', 'image/png', '21065', 'U0008', 'T201905130106');
INSERT INTO `file` VALUES (610, '20190516084133_AJB_proses16052019.png', 'image/png', '19045', 'U0008', 'T201905130106');
INSERT INTO `file` VALUES (611, '20190516084549_AJB_proses16052019Rev01.png', 'image/png', '19045', 'U0008', 'T201905130106');
INSERT INTO `file` VALUES (612, '20190516084954_Test_upload_ticketing16052019.jpeg', 'image/jpeg', '68300', 'U0008', 'T201905130106');
INSERT INTO `file` VALUES (616, '20190516085106_Test_upload_ticketing1605201902.jpg', 'image/jpeg', '33607', 'U0008', 'T201905130106');
INSERT INTO `file` VALUES (625, '20190527145153_AJBpros01.png', 'image/png', '16293', 'U0008', 'T201905270107');
INSERT INTO `file` VALUES (631, '20190610101236_Update_Unpost_SPK_Entry_20190610.rar', 'application/octet-stream', '21249', 'U0014', 'T201905070105');
INSERT INTO `file` VALUES (632, '20190619095954_report_spk_1.jpg', 'image/jpeg', '26294', 'U0006', 'T201906190108');
INSERT INTO `file` VALUES (633, '20190620113835_Form_LA.png', 'image/png', '56667', 'U0014', 'T201904290099');
INSERT INTO `file` VALUES (634, '20190620114719_Form_CS.png', 'image/png', '43382', 'U0014', 'T201904290101');
INSERT INTO `file` VALUES (635, '20190620114719_Report_CS.png', 'image/png', '27826', 'U0014', 'T201904290101');
INSERT INTO `file` VALUES (636, '20190620115101_Form_CS_Before_Save.png', 'image/png', '46944', 'U0014', 'T201905020102');
INSERT INTO `file` VALUES (637, '20190620115101_Form_CS_After_Save.png', 'image/png', '48343', 'U0014', 'T201905020102');
INSERT INTO `file` VALUES (639, '12Aug2019111731.jpg', 'image/jpeg', NULL, 'U0002', 'T201908120109');

-- ----------------------------
-- Table structure for history_feedback
-- ----------------------------
DROP TABLE IF EXISTS `history_feedback`;
CREATE TABLE `history_feedback`  (
  `id_feedback` int(11) NOT NULL AUTO_INCREMENT,
  `id_ticket` varchar(13) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `feedback` int(11) NOT NULL,
  `reported` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `deskripsi` text CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  PRIMARY KEY (`id_feedback`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 233 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of history_feedback
-- ----------------------------
INSERT INTO `history_feedback` VALUES (38, 'T201805210001', 1, 'U0005', NULL);
INSERT INTO `history_feedback` VALUES (65, 'T201805300003', 1, 'U0009', NULL);
INSERT INTO `history_feedback` VALUES (68, 'T201807180016', 1, 'U0008', NULL);
INSERT INTO `history_feedback` VALUES (71, 'T201807060004', 1, 'U0008', NULL);
INSERT INTO `history_feedback` VALUES (84, 'T201807310019', 1, 'U0006', NULL);
INSERT INTO `history_feedback` VALUES (85, 'T201808030021', 1, 'U0006', NULL);
INSERT INTO `history_feedback` VALUES (87, 'T201807060005', 1, 'U0008', NULL);
INSERT INTO `history_feedback` VALUES (88, 'T201807090010', 1, 'U0008', NULL);
INSERT INTO `history_feedback` VALUES (89, 'T201807110013', 1, 'U0008', NULL);
INSERT INTO `history_feedback` VALUES (90, 'T201808020020', 1, 'U0007', NULL);
INSERT INTO `history_feedback` VALUES (93, 'T201807090008', 1, 'U0006', NULL);
INSERT INTO `history_feedback` VALUES (94, 'T201807060006', 1, 'U0008', NULL);
INSERT INTO `history_feedback` VALUES (110, 'T201807250017', 1, 'U0009', NULL);
INSERT INTO `history_feedback` VALUES (111, 'T201807160014', 1, 'U0009', NULL);
INSERT INTO `history_feedback` VALUES (113, 'T201807060007', 1, 'U0008', NULL);
INSERT INTO `history_feedback` VALUES (120, 'T201808100023', 1, 'U0008', NULL);
INSERT INTO `history_feedback` VALUES (121, 'T201807090009', 1, 'U0006', NULL);
INSERT INTO `history_feedback` VALUES (122, 'T201807110011', 1, 'U0007', NULL);
INSERT INTO `history_feedback` VALUES (123, 'T201807180015', 1, 'U0009', NULL);
INSERT INTO `history_feedback` VALUES (125, 'T201808150025', 1, 'U0008', NULL);
INSERT INTO `history_feedback` VALUES (126, 'T201808140024', 1, 'U0006', NULL);
INSERT INTO `history_feedback` VALUES (127, 'T201808280028', 1, 'U0006', NULL);
INSERT INTO `history_feedback` VALUES (128, 'T201809040030', 1, 'U0008', NULL);
INSERT INTO `history_feedback` VALUES (129, 'T201809060031', 1, 'U0008', NULL);
INSERT INTO `history_feedback` VALUES (130, 'T201809140034', 1, 'U0008', NULL);
INSERT INTO `history_feedback` VALUES (131, 'T201809170035', 1, 'U0008', NULL);
INSERT INTO `history_feedback` VALUES (134, 'T201808270026', 1, 'U0006', NULL);
INSERT INTO `history_feedback` VALUES (135, 'T201809120032', 1, 'U0006', NULL);
INSERT INTO `history_feedback` VALUES (136, 'T201807110012', 1, 'U0009', NULL);
INSERT INTO `history_feedback` VALUES (137, 'T201809140033', 1, 'U0008', NULL);
INSERT INTO `history_feedback` VALUES (138, 'T201809240038', 1, 'U0006', NULL);
INSERT INTO `history_feedback` VALUES (139, 'T201809280041', 1, 'U0008', NULL);
INSERT INTO `history_feedback` VALUES (140, 'T201809270040', 1, 'U0006', NULL);
INSERT INTO `history_feedback` VALUES (141, 'T201810010044', 1, 'U0006', NULL);
INSERT INTO `history_feedback` VALUES (142, 'T201810010045', 1, 'U0006', NULL);
INSERT INTO `history_feedback` VALUES (143, 'T201809190036', 1, 'U0006', NULL);
INSERT INTO `history_feedback` VALUES (145, 'T201809280042', 1, 'U0009', NULL);
INSERT INTO `history_feedback` VALUES (146, 'T201808090022', 1, 'U0008', NULL);
INSERT INTO `history_feedback` VALUES (151, 'T201810030046', 1, 'U0003', NULL);
INSERT INTO `history_feedback` VALUES (153, 'T201810050047', 1, 'U0006', NULL);
INSERT INTO `history_feedback` VALUES (156, 'T201810040046', 1, 'U0008', NULL);
INSERT INTO `history_feedback` VALUES (158, 'T201808310029', 1, 'U0008', NULL);
INSERT INTO `history_feedback` VALUES (159, 'T201810110049', 1, 'U0008', NULL);
INSERT INTO `history_feedback` VALUES (160, 'T201809260039', 1, 'U0008', NULL);
INSERT INTO `history_feedback` VALUES (162, 'T201810160051', 1, 'U0008', NULL);
INSERT INTO `history_feedback` VALUES (163, 'T201810160052', 1, 'U0008', NULL);
INSERT INTO `history_feedback` VALUES (165, 'T201810010043', 1, 'U0006', NULL);
INSERT INTO `history_feedback` VALUES (167, 'T201808270027', 1, 'U0007', NULL);
INSERT INTO `history_feedback` VALUES (168, 'T201805280002', 1, 'U0005', NULL);
INSERT INTO `history_feedback` VALUES (170, 'T201810240054', 1, 'U0008', NULL);
INSERT INTO `history_feedback` VALUES (172, 'T201810310056', 1, 'U0006', NULL);
INSERT INTO `history_feedback` VALUES (173, 'T201809190037', 1, 'U0003', NULL);
INSERT INTO `history_feedback` VALUES (174, 'T201810300055', 1, 'U0008', NULL);
INSERT INTO `history_feedback` VALUES (175, 'T201810080048', 1, 'U0008', NULL);
INSERT INTO `history_feedback` VALUES (177, 'T201811050057', 1, 'U0006', NULL);
INSERT INTO `history_feedback` VALUES (178, 'T201810220053', 1, 'U0005', NULL);
INSERT INTO `history_feedback` VALUES (180, 'T201811120059', 1, 'U0006', NULL);
INSERT INTO `history_feedback` VALUES (181, 'T201811090058', 1, 'U0018', '');
INSERT INTO `history_feedback` VALUES (184, 'T201811120060', 1, 'U0006', NULL);
INSERT INTO `history_feedback` VALUES (187, 'T201807270018', 1, 'U0006', NULL);
INSERT INTO `history_feedback` VALUES (188, 'T201811140061', 1, 'U0006', NULL);
INSERT INTO `history_feedback` VALUES (190, 'T201812040064', 1, 'U0006', NULL);
INSERT INTO `history_feedback` VALUES (191, 'T201811230062', 1, 'U0006', NULL);
INSERT INTO `history_feedback` VALUES (193, 'T201811260063', 1, 'U0008', NULL);
INSERT INTO `history_feedback` VALUES (195, 'T201812140066', 1, 'U0008', NULL);
INSERT INTO `history_feedback` VALUES (196, 'T201812190068', 1, 'U0008', NULL);
INSERT INTO `history_feedback` VALUES (197, 'T201812190067', 1, 'U0017', NULL);
INSERT INTO `history_feedback` VALUES (199, 'T201812110065', 1, 'U0006', NULL);
INSERT INTO `history_feedback` VALUES (201, 'T201901030071', 1, 'U0008', NULL);
INSERT INTO `history_feedback` VALUES (202, 'T201812280069', 1, 'U0008', NULL);
INSERT INTO `history_feedback` VALUES (204, 'T201901080072', 1, 'U0008', NULL);
INSERT INTO `history_feedback` VALUES (207, 'T201901080073', 1, 'U0008', NULL);
INSERT INTO `history_feedback` VALUES (208, 'T201901100074', 1, 'U0006', NULL);
INSERT INTO `history_feedback` VALUES (213, 'T201901120076', 1, 'U0008', NULL);
INSERT INTO `history_feedback` VALUES (214, 'T201901160079', 1, 'U0008', NULL);
INSERT INTO `history_feedback` VALUES (215, 'T201901220081', 1, 'U0008', NULL);
INSERT INTO `history_feedback` VALUES (216, 'T201901020070', 1, 'U0005', NULL);
INSERT INTO `history_feedback` VALUES (217, 'T201901160077', 1, 'U0006', NULL);
INSERT INTO `history_feedback` VALUES (218, 'T201901180080', 1, 'U0006', NULL);
INSERT INTO `history_feedback` VALUES (219, 'T201902210086', 1, 'U0008', NULL);
INSERT INTO `history_feedback` VALUES (220, 'T201902260087', 1, 'U0008', NULL);
INSERT INTO `history_feedback` VALUES (221, 'T201901160078', 1, 'U0008', NULL);
INSERT INTO `history_feedback` VALUES (222, 'T201903040088', 1, 'U0008', NULL);
INSERT INTO `history_feedback` VALUES (223, 'T201901300082', 1, 'U0005', NULL);
INSERT INTO `history_feedback` VALUES (224, 'T201902010084', 1, 'U0006', NULL);
INSERT INTO `history_feedback` VALUES (225, 'T201903130089', 1, 'U0008', NULL);
INSERT INTO `history_feedback` VALUES (226, 'T201903190090', 1, 'U0006', NULL);
INSERT INTO `history_feedback` VALUES (227, 'T201901300083', 1, 'U0008', NULL);
INSERT INTO `history_feedback` VALUES (228, 'T201905060104', 1, 'U0006', NULL);
INSERT INTO `history_feedback` VALUES (229, 'T201904250098', 1, 'U0005', NULL);
INSERT INTO `history_feedback` VALUES (230, 'T201901110075', 1, 'U0005', NULL);
INSERT INTO `history_feedback` VALUES (231, 'T201904290100', 1, 'U0005', NULL);
INSERT INTO `history_feedback` VALUES (232, 'T201905070105', 1, 'U0008', NULL);

-- ----------------------------
-- Table structure for informasi
-- ----------------------------
DROP TABLE IF EXISTS `informasi`;
CREATE TABLE `informasi`  (
  `id_informasi` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` datetime NOT NULL,
  `subject` varchar(35) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `pesan` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `status` decimal(2, 0) NOT NULL,
  `id_user` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id_informasi`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of informasi
-- ----------------------------
INSERT INTO `informasi` VALUES (1, '2017-12-08 17:20:05', 'TESTING PROGRAM', 'APLIKASI TIKETING MDLN', 1, 'U0001');
INSERT INTO `informasi` VALUES (2, '2018-03-26 15:20:39', 'SERVER DOWN', 'DIKARENAKAN 2 AC SERVER MATI, MENGAKIBATKAN 3 HARDISK OVERHEAT. MAKA SERVER DIPASTIKAN DOWN..\nTERIMA KASIH', 1, 'U0001');

-- ----------------------------
-- Table structure for kategori
-- ----------------------------
DROP TABLE IF EXISTS `kategori`;
CREATE TABLE `kategori`  (
  `id_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(35) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id_kategori`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of kategori
-- ----------------------------
INSERT INTO `kategori` VALUES (7, 'SYSTEM');
INSERT INTO `kategori` VALUES (8, 'DATA');

-- ----------------------------
-- Table structure for kondisi
-- ----------------------------
DROP TABLE IF EXISTS `kondisi`;
CREATE TABLE `kondisi`  (
  `id_kondisi` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kondisi` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `waktu_respon` decimal(10, 0) NOT NULL,
  PRIMARY KEY (`id_kondisi`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of kondisi
-- ----------------------------
INSERT INTO `kondisi` VALUES (1, 'URGENT', 3);
INSERT INTO `kondisi` VALUES (2, 'NORMAL', 7);

-- ----------------------------
-- Table structure for sub_kategori
-- ----------------------------
DROP TABLE IF EXISTS `sub_kategori`;
CREATE TABLE `sub_kategori`  (
  `id_sub_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `nama_sub_kategori` varchar(35) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `id_kategori` int(11) NOT NULL,
  PRIMARY KEY (`id_sub_kategori`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of sub_kategori
-- ----------------------------
INSERT INTO `sub_kategori` VALUES (7, 'BUGS FORM', 7);
INSERT INTO `sub_kategori` VALUES (8, 'REQUEST FORM', 7);
INSERT INTO `sub_kategori` VALUES (9, 'REQUEST REPORT', 7);
INSERT INTO `sub_kategori` VALUES (10, 'BUGS REPORT', 7);
INSERT INTO `sub_kategori` VALUES (11, 'DATA ERROR', 8);

-- ----------------------------
-- Table structure for ticket
-- ----------------------------
DROP TABLE IF EXISTS `ticket`;
CREATE TABLE `ticket`  (
  `id_ticket` varchar(13) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tanggal` datetime NOT NULL,
  `tanggal_proses` datetime NOT NULL,
  `tanggal_solved` datetime NOT NULL,
  `reported` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `app` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `id_sub_kategori` int(11) NOT NULL,
  `problem_summary` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `problem_detail` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `id_support` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `status` int(11) NOT NULL,
  `progress` decimal(10, 0) NOT NULL,
  `feedback` varchar(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  PRIMARY KEY (`id_ticket`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of ticket
-- ----------------------------
INSERT INTO `ticket` VALUES ('T201805210001', '2018-05-21 09:15:38', '2018-05-21 10:26:48', '2018-05-21 10:32:18', 'U0005', 'ast_desktop', 10, 'GAGAL', 'INPUT DATA', 'U0011', 6, 100, 'Y');
INSERT INTO `ticket` VALUES ('T201805280002', '2018-06-07 11:47:34', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'U0005', 'ast_desktop', 11, 'REPORT MUTASI KAS BANK EROR', 'HAL INI TERJADI DI ENTITY GSM, UNTUK BANK BTN\nKENAPA SAAT MEMBUKA REPORT MUTASE KAS/BANK (GL POSTED), DATA BANK TIDAK TAMPIL YA? SEDANGKAN JIKA DI CEK DI GENERAL LEDGER UNTUK ACCOUNT BANK BTN TSB MUNCUL.', 'U0011', 6, 100, 'Y');
INSERT INTO `ticket` VALUES ('T201805300003', '2018-05-30 08:56:26', '0000-00-00 00:00:00', '2018-07-11 11:24:43', 'U0009', 'ast_desktop', 7, 'CN OWNERSHIP', 'PADA SAAT MAU MELAKUKAN PENGIPUTAN CN OWNERSHIP MUNCUL FORM DATA INCOMEPLETE TRANSACTION. PADAHALA KLIK NEW BUKAN MELAKUKAN PERBAIKAN DI FORM TERSEBUT.', 'U0011', 6, 100, 'Y');
INSERT INTO `ticket` VALUES ('T201807060004', '2018-07-06 14:31:31', '2018-07-23 15:27:52', '2018-07-23 15:28:17', 'U0008', 'ast_desktop', 8, 'PENGALIHAN HAK MODUL OWNERSHIP', 'DI PROJECT JGC ENTITY MDL SAAT INI KAMI INGIN MENGGUNAKAN FORM PENGALIHAN HAK OWNERSHIP , MOHON UNTUK DIBUATKAN PROSES PENGALIHAN HAK DI MODUL OWNERSHIP DENGAN KONSEP SBB :\n\n1.	PENGALIHAN HAK OWNERSHIP HANYA BISA DILAKUKAN DENGAN VALIDASI UNIT TERSEBUT HARUS SUDAH SERAH TERIMA DAN MEMPUNYAI DEBTOR IPKL\n2.	PENGALIHAN HAK OWNERSHIP TIDAK MENGACU ATAU MERUBAH APAPUN DI SALES (PIUTANG SALES,BOOKING ENTRY,DLL)\n3.	PENGALIHAN HAK OWNERSHIP HANYA MENGUPDATE/MEREPLACE INVOICE IPKL DAN PIUTANG IPKL YANG LAMA MENJADI PEMILIK BARU.\n4.	DEBTOR BARU AKAN TERBENTUK ATAU TEREPLACE SAAT PENGALIHAN HAK OWNERSHIP DI POSTING    (JADI USER HANYA MEMBUAT CUSTOMER ID DI FORM DEBTOR MASTER FILE)\n5.	 UNTUK FIELD TO OWNER DI FORM PENGALIHAN HAK LOOK UP KE CUSTOMER MASTER DENGAN PARAMETER BUSINESS_ID DAN NAMA', 'U0011', 6, 100, 'Y');
INSERT INTO `ticket` VALUES ('T201807060005', '2018-07-06 14:38:55', '0000-00-00 00:00:00', '2018-08-08 14:28:48', 'U0008', 'ast_desktop', 8, 'POSTING PENALTY PER INVOICE', 'TOLONG UNTUK POSTING PENALTY DIBUAT MENJADI POSTING PER INVOICE, KARENA YANG SAAT INI BERJALAN POSTING PENALTY PER DEBTOR.', 'U0011', 6, 100, 'Y');
INSERT INTO `ticket` VALUES ('T201807060006', '2018-07-06 14:41:25', '0000-00-00 00:00:00', '2018-08-10 09:37:54', 'U0008', 'ast_desktop', 9, 'PRINT ALL UNTUK OUTPUT AJB', 'MOHON DIBUATKAN PROSES PRINT ALL UNTUK PROSES OUTPUT AJB , DENGAN PARAMETER TANGGAL DIBUATNYA PROSES AJB, UNTUK OUTPUT NY TOLONG DI TEMPEL DI MODUL AR > OUTPUT > REPORT LEGAL', 'U0011', 6, 100, 'Y');
INSERT INTO `ticket` VALUES ('T201807060007', '2018-07-06 14:43:23', '2018-08-15 11:25:36', '2018-08-15 11:26:51', 'U0008', 'ast_desktop', 7, 'MASTER DEBTOR VA', 'MOHON UNTUK NOMOR VA DI TEMPEL DI UNIT, KARENA SAAT INI SETIAP ADA CANCELLATION DAN INPUT SP BARU, DEBTOR VA TERBENTUK JUGA', 'U0011', 6, 100, 'Y');
INSERT INTO `ticket` VALUES ('T201807090008', '2018-07-09 09:04:15', '2018-08-08 15:59:44', '2018-08-08 16:01:24', 'U0006', 'ast_desktop', 7, 'ERROR TENANCY MANAGEMENT', 'MOHON BANTUANNYA, SAAT MEMBUKA LOT MASTER FILE DI TENANCY MANAGEMENT MUNCUL MSGBOX SEPERTI GAMBAR TERLAMPIR.', 'U0011', 6, 100, 'Y');
INSERT INTO `ticket` VALUES ('T201807090009', '2018-07-09 13:50:07', '2018-07-10 09:16:37', '2018-07-10 09:18:28', 'U0006', 'ast_desktop', 8, 'SPK MANUAL', 'TOLONG UPDATE KEMBALI SPK MANUAL YANG LAMA.', 'U0011', 6, 100, 'Y');
INSERT INTO `ticket` VALUES ('T201807090010', '2018-07-09 14:03:22', '2018-08-02 16:41:49', '2018-08-02 16:42:52', 'U0008', 'ast_desktop', 7, 'ERROR ADD DETAIL BOOKING ESTIMATE MODULE PL', 'MOHON DI CHECK UNTUK FORM BOOKING ESTIMATE DI MODULE PL, KARENA SERING TERJADI ERROR SAAT MENAMBAH DETAIL DI FORM BOOKING ESTIMATE, SEPERTI DI LAMPIRAN DOKUMEN,', 'U0011', 6, 100, 'Y');
INSERT INTO `ticket` VALUES ('T201807110011', '2018-07-11 09:42:48', '0000-00-00 00:00:00', '2018-07-11 10:57:34', 'U0007', 'ast_desktop', 11, 'DN DOUBLE', 'TRANSAKSI DN (DEBIT NOTE) MUNCUL 2X/DOUBLE DI EXTERNAL GENERAL JOURNAL.\nDOC_NO : JC/DN/18/07/00002', 'U0011', 6, 100, 'Y');
INSERT INTO `ticket` VALUES ('T201807110012', '2018-07-11 10:25:56', '2018-08-23 08:55:47', '2018-09-18 08:43:59', 'U0009', 'ast_desktop', 7, 'VA OR AUTO', 'UNTUK FORM OR AUTO YANG DIBICARAKAN MEETING TERKAHIR, DI MANA DETAIL DI FORM TERSEBUT TIDAK BISA REFRESH OTOMATIS. SEHINGGA MENYEBABKAN TIDAK MUNCUL PPN DI FORM TERSEBUT PADA BAGIAN DETAIL. SERTA DI BAGIAN DETAIL FORM TERSEBUT, INVOICE BERJALAN JUGA TIDAK MUNCUL.', 'U0011', 6, 100, 'Y');
INSERT INTO `ticket` VALUES ('T201807110013', '2018-07-11 17:05:30', '0000-00-00 00:00:00', '2018-08-08 14:23:20', 'U0008', 'ast_desktop', 7, 'ERROR IMPORT SALES', 'MOHON DI CHECK UNTUK FORM IMPORT SALES TERJADI ERROR SAAT MELAKUKAN IMPORT MASTER UNIT.', 'U0011', 6, 100, 'Y');
INSERT INTO `ticket` VALUES ('T201807160014', '2018-07-16 17:24:00', '2018-08-08 15:30:14', '2018-08-10 09:36:47', 'U0009', 'ast_desktop', 7, 'TIDAK BISA TERBENTUK INVOICE TENANCY', 'TIDAK DAPAT TERBENTUK INVOICE MILIK TENANCY PADA MODUL TENANCY MANAGEMENT UNTUK BULAN JULI 2018. SAYA MENJALANKAN PADA FORM \"CONTRACT SIGNING ENTRY STANDING\", PADAHAL SAYA SUDAH MELAKUKAN APPROVE DAN SAVE PADA TAB \"OTHER CHANGE\". CONTOH KODE UNIT TERLAMPIR PADA GAMBAR.', 'U0011', 6, 100, 'Y');
INSERT INTO `ticket` VALUES ('T201807180015', '2018-07-18 10:37:26', '0000-00-00 00:00:00', '2018-07-23 15:29:39', 'U0009', 'ast_desktop', 10, 'ERROR KARTU PIUTANG KONSUMEN (GSM)', 'PADA SAAT MAU MENAMPILKAN REPORT KARTU PIUTANG KONSUMEN (AR). MUNCUL ERROR PADA GAMBAR (ATTACHMENT), NAMUN ITU HANYA BERLAKU PADA PROJECT GSM (GOLDEN SURYA MAKMUR).', 'U0011', 6, 100, 'Y');
INSERT INTO `ticket` VALUES ('T201807180016', '2018-07-18 17:28:07', '2018-07-23 15:26:13', '2018-07-23 15:27:13', 'U0008', 'ast_desktop', 11, 'ERROR ALOKASI OR SALES', 'MOHON DI CHECK DAN INFO UNTUK DEBTOR H1 / 015/001 UNTUK PENERIMAAN JC/BM/18/07/00234 TIDAK BISA DI ALOKASI, MUNCUL ERROR SEPERTI DI GAMBAR TERLAMPIR.\nTERIMA KASIH', 'U0011', 6, 100, 'Y');
INSERT INTO `ticket` VALUES ('T201807250017', '2018-07-25 11:37:37', '2018-08-10 08:53:33', '2018-08-10 09:14:16', 'U0009', 'ast_desktop', 10, 'TOTAL SALDO', 'PADA LAPORAN KARTU PIUTANG KONSUMEN (AR), NILAI TOTAL SALDO AKHIR TIDAK SESUAI DENGAN SEHARUSNYA. KARENA KONSUMEN ADA PEMBAYARAN DAN DI POTONG NILAI CN. HARUSNYA SALDO KONSUMEN TERSEBUT 75.225.841. UNTUK UNIT \"YD/GF/07\".', 'U0011', 6, 100, 'Y');
INSERT INTO `ticket` VALUES ('T201807270018', '2018-07-27 11:13:53', '2018-11-21 16:18:23', '2018-11-21 15:35:49', 'U0006', 'ast_desktop', 10, 'USER AKTIF (LOG)', 'MOHON BANTUANNYA UNTUK DI CEK KEMBALI,\nTERJADI CASE DIMANA USER KM (ATAS NAMA DEDI) SEDANG MEMBUKA EXTERNAL JOURNAL. USER HO (ATAS NAMA PITFUNG) SEDANG POSTING CASHBOOK DAN TERJADI REQUEST TIME OUT.\nDIINFOKAN KE USER KM UNTUK TUTUP FORM TAPI MASIH TERJADI LOCK, DAN SETELAH LOGOUT BARU SYSTEM BERJALAN DENGAN NORMAL.', 'U0011', 6, 100, 'Y');
INSERT INTO `ticket` VALUES ('T201807310019', '2018-07-31 14:35:01', '0000-00-00 00:00:00', '2018-08-08 14:21:29', 'U0006', 'ast_desktop', 7, 'INSERT STANDING CHARGES OWNERSHIP', 'DEAR TEAM AST,\n\nMOHON BANTUANNYA, SERING TERJADI KETIKA USER MAU INSERT NEW STANDING CHARGES OWNERSHIP TAPI ICON INSERT TIDAK DAPAT DIGUNAKAN.', 'U0011', 6, 100, 'Y');
INSERT INTO `ticket` VALUES ('T201808020020', '2018-08-02 14:48:16', '0000-00-00 00:00:00', '2018-08-02 16:41:07', 'U0007', 'ast_desktop', 7, 'ERROR INPUT MASTER ACTIVITY', 'KETIKA INPUT MULTI ACTIVITY MUNCUL ERROR (TERLAMPIR)', 'U0011', 6, 100, 'Y');
INSERT INTO `ticket` VALUES ('T201808030021', '2018-08-03 09:03:41', '0000-00-00 00:00:00', '2018-08-08 14:19:36', 'U0006', 'ast_desktop', 10, 'PRINT KWITANSI ESTATE OR AUTO', 'MOHON BANTUANNYA, TERJADI ERROR DIMANA SAAT MAU PRINT KWITANSI ESTATE DI OR AUTO DAN MUNCUL MSGBOX TANDA PENTUNG.\n\nTERIMAKASIH.', 'U0011', 6, 100, 'Y');
INSERT INTO `ticket` VALUES ('T201808090022', '2018-08-09 08:34:52', '2018-10-02 15:39:25', '2018-10-02 15:40:59', 'U0008', 'ast_desktop', 7, 'FORM PPJB ADMIN DOKUMEN', 'MOHON BANTUANNY TEAM AST UNTUK MEMBENARKAN PROSES APPROVE DAN UNAPPROVE UNTUK INPUT PPJB, KARENA YANG SAAT INI TERJADI UNTUK TOMBOL APPROVE TIDAK MEMASUKKAN PASSWORD DAN UNTUK TOMBOL UNAPPROVE KETIKA DI KLIK DAN BERHASIL, MUNCUL POP UP YANG MEMBINGUNGKAN USER APAKAH INPUT BERHASIL DI UNAPPROVE , TERLAMPIR GAMBAR.', 'U0011', 6, 100, 'Y');
INSERT INTO `ticket` VALUES ('T201808100023', '2018-08-10 10:34:45', '2018-08-23 10:51:29', '2018-08-23 10:52:45', 'U0008', 'ast_desktop', 11, 'DOUBLE ACTIVITY_CD DI ACTIVITY MASTER MODULE PL', 'DEAR TEAM AST, MOHON BANTUANNYA UNTUK TOTAL BUDGET YANG BERBEDA DI FORM BOOKING ESTIMATE DENGAN REPORT MASTER BUDGET,\nSETELAH DI CHECK ADA 2 ACTIVITY_CODE YANG SAMA DALAM REPORT, MENYEBABKAN SUM TOTAL NY LEBIH BESAR, TOLONG UNTUK DI FORM MASTER ACTIVITY NYA DIBUATKAN VALIDASI PRIMARY KEY TERHADAP ACTIVITY_CODE, \n\nTERIMA KASIH.', 'U0014', 6, 100, 'Y');
INSERT INTO `ticket` VALUES ('T201808140024', '2018-08-14 10:31:06', '0000-00-00 00:00:00', '2018-08-16 08:30:18', 'U0006', 'ast_desktop', 7, 'ERROR DEBIT NOTE AP', 'DEAR TEAM AST,\nMOHON BANTUANNYA TERJADI ERROR PADA FORM DEBIT NOTE AP. DIMANA SAAT MASUK FORM ENTRY KEMUDIAN KE ALLOCATION, BALIK LAGI KE ENTRY DAN PILIH SEARCH RECORD TERJADI ERROR SEPERTI LAMPIRAN GAMBAR.\nTERIMAKASIH.', 'U0014', 6, 100, 'Y');
INSERT INTO `ticket` VALUES ('T201808150025', '2018-08-15 11:12:56', '2018-08-27 17:33:10', '2018-08-27 17:34:50', 'U0008', 'ast_desktop', 7, 'VALIDASI FORM PENGAJUAN KREDIT', 'DEAR TEAM AST MOHON BANTUANNYA UNTUK FORM PENGAJUAN KPR DI VALIDASI KETIKA NOMINAL DI SPR 0 PROSES TIDAK BISA DILANJUTKAN, KARENA ADA KASUS USER SALAH MEMILIH TRX_TYPE PADA SAAT PEMBUATAN PAYMENT PLAN KPR, DIISI DENGAN DP  YANG SEHARUSNYA KR.\nDAN KPR UNIT G7 / 005 A.N. ROBIN SUSANTO TSB  TIDAK BISA DI UNPOST.', 'U0011', 6, 100, 'Y');
INSERT INTO `ticket` VALUES ('T201808270026', '2018-08-27 09:43:46', '0000-00-00 00:00:00', '2018-09-14 08:53:08', 'U0006', 'ast_desktop', 7, 'ERROR ALLOCATION CREDIT NOTE OWNERSHIP', 'DEAR AST,\nMOHON BANTUANNYA. TERJADI ERROR PADA FORM CREDIT NOTE OWNERSHIP PADA NO PS/CN/18/08/00069 SAAT ALLOCATION NILAINYA TIDAK SAMA DENGAN AMOUNTNYA.\nDISINI SAYA ALOKASI DENGAN NILAI 3JT TP PADA AMOUNT TERTULIS 6JT.\n\nBERIKUT SAYA LAPIRKAN SCREENSHOT FORMNYA.\nTERIMAKASIH.', 'U0011', 6, 100, 'Y');
INSERT INTO `ticket` VALUES ('T201808270027', '2018-08-27 10:47:33', '0000-00-00 00:00:00', '2018-08-27 11:33:15', 'U0007', 'ast_desktop', 7, 'DESCRIPTION TIDAK MUNCUL DI FORM EXT. GENERAL JOUR', 'PAK HOTNIEL,\n\nMOHON BANTUANNYA UNTUK CASE BERIKUT.\nKAMI SUDAH MELAKUKAN REFUND OR (DI LOKAL)  UNTUK TRANSAKSI JC/BM/18/05/00320 UNIT A17 / 67 AN DAVID ALFA PERDANA, SE.\nREFUND OR TERSEBUT SUDAH DIPOSTING, TETAPI KETIKA KAMI CEK DI EXT. GENERAL JOURNAL KOLOM DESCRIPTIONNYA KOSONG.\nJADI KAMI TIDAK BISA MELIHAT KETERANGAN DARI JOURNAL OR NYA.\n\n\nMOHON BANTUANNYA YA PAK,TERIMA KASIH.', 'U0011', 6, 100, 'Y');
INSERT INTO `ticket` VALUES ('T201808280028', '2018-08-28 16:16:59', '0000-00-00 00:00:00', '2018-08-28 16:28:41', 'U0006', 'ast_desktop', 7, 'INSERT STANDING CHARGES OWNERSHIP', 'DEAR TEAM AST,\nMOHON BANTUANNYA UNTUK INSERT STANDING CHARGES OWNERSHIP TIDAK BISA DI KLIK. SETELAH SAYA LIHAT STATUS YANG ADA PADA OWNERSHIP ENTRY, UNTUK STATUS \'ENTRY\' ICON INSERT PADA STANDING CHARGES TIDAK DAPAT DI KLIK. SEDANGKAN UNTUK STATUS \'CONTRACTED\' DAN \'POSTED\' ICON ENTRYNYA DAPAT DI KLIK.\nTERIMA KASIH.', 'U0011', 6, 100, 'Y');
INSERT INTO `ticket` VALUES ('T201808310029', '2018-08-31 15:12:47', '2018-10-09 16:30:04', '2018-10-09 16:30:43', 'U0008', 'ast_desktop', 7, 'SALES CANCELLATION', 'DEAR TEAM AST, MOHON BANTUANNY UNTUK CHECK POSTING CANCELLATION, KARENA ADA PROSES CANCEL YANG GAGAL DENGAN UNIT J15 / 021 A.N. MERY SUMARNI, DIA SUDAH STATUS POSTED DI CANCELLATION TAPI DI MASTER UNIT STATUS UNIT MASIH SPR, DAN DI BOOKING ENTRY MASIH ADA DENGAN CUSTOMER TSB, TERIMA KASIH..', 'U0011', 6, 100, 'Y');
INSERT INTO `ticket` VALUES ('T201809040030', '2018-09-04 09:10:14', '0000-00-00 00:00:00', '2018-09-04 11:14:02', 'U0008', 'ast_desktop', 7, 'SPK ENTRY TIDAK TERBENTUK TOTAL AMOUNT', 'DEAR TEAM AST, MOHON DICHECK UNTUK FORM SPK ENTRY DI MODULE SPK ATAU SPK DIRECT , SAAT MENGINPUT DI DETAIL, TOTAL AMOUNT TIDAK TERBENTUK, TERIMA KASIH', 'U0014', 6, 100, 'Y');
INSERT INTO `ticket` VALUES ('T201809060031', '2018-09-06 09:46:32', '0000-00-00 00:00:00', '2018-09-07 09:24:29', 'U0008', 'ast_desktop', 8, 'FIELD ROUNDING SPK ENTRY', 'DEAR TEAM AST, TOLONG UNTUK FIELD ROUNDING DI FORM SPK ENTRY DI BUAT DEFAULT NY BERNILAI 0, UNTUK MENCEGAH TOTAL AMOUNT NY YANG TIDAK TERBENTUK APABILA USER LUPA MENGINPUT, TERIMA KASIH.', 'U0014', 6, 100, 'Y');
INSERT INTO `ticket` VALUES ('T201809120032', '2018-09-12 12:04:30', '0000-00-00 00:00:00', '2018-09-18 09:55:30', 'U0006', 'ast_desktop', 11, 'JOURNAL PENERIMAAN YANG ADA PPH', 'MOHON BANTUANNYA,\n\nUNTUK PENERIMAAN YG INVOICENYA ADA AMOUNT PPH, HASIL JOURNAL YG TERBENTUK HARUS ADA COA PPHNYA.\n\nTERIMAKASIH.', 'U0011', 6, 100, 'Y');
INSERT INTO `ticket` VALUES ('T201809140033', '2018-09-14 18:43:22', '2018-09-21 17:15:00', '2018-09-21 17:17:05', 'U0008', 'ast_desktop', 11, 'REFUND OR', 'MOHON BANTUANNYA UNTUK UNIT A17 / 67 MENJALANKAN PROSES REFUND KARENA INVOICE YANG SUDAH DI BAYARKAN MINTA DI KEMBALIKAN KARENA AKAN DIALOKASIKAN KE KPR (NAIK PLAFON), SETELAH PROSES REFUND OR  DIJALANKAN DAN DILAKUKAN REVISI UNTUK MENGALOKASIKAN NILAI REFUND KE KPR, DIPIUTANG MALAH MENAMBAH SALDO DAN PRICE DI KARTU PIUTANG.', 'U0011', 6, 100, 'Y');
INSERT INTO `ticket` VALUES ('T201809140034', '2018-09-14 19:05:23', '0000-00-00 00:00:00', '2018-09-17 13:07:28', 'U0008', 'ast_desktop', 11, 'DN DATA ERROR', 'MOHON BANTUANNY TEAM AST, ADA DN UNTUK INVOICE JC/IP/18/08/00115, SEBESAR 18172727, KARENA ADA PPH SEBESAR 7.5%, MAKA DI DN DI INPUT SEBESAR DPP 16809773, SETELAH DN DI APPROVE, DI PIUTANG MUNCUL DN SEBESAR 18039756, SELISIH 132971 DARI NILAI INVOICE.', 'U0011', 6, 100, 'Y');
INSERT INTO `ticket` VALUES ('T201809170035', '2018-09-17 16:54:53', '0000-00-00 00:00:00', '2018-09-18 15:51:58', 'U0008', 'ast_desktop', 11, 'INVOICE SPK MUNCUL DI AP INVOICE ENTRY MANUAL', 'DEAR TEAM AST, MOHON BANTUAN DAN PENJELASAN UNTUK INVOICE SPK YANG MUNCUL DI AP INVOICE ENTRY, KASUS INI KETEMU PADA TGL 25-JULY-2018, SAMPAI SEKARANG INVOICE TERSEBUT MASIH ADA, TERIMA KASIH.', 'U0014', 6, 100, 'Y');
INSERT INTO `ticket` VALUES ('T201809190036', '2018-09-19 10:07:16', '0000-00-00 00:00:00', '2018-10-01 13:36:13', 'U0006', 'ast_desktop', 11, 'ERROR DATA KARTU PIUTANG KONSUMEN', 'DEAR TEAM AST, MOHON BANTUANNYA TERJADI ERROR PADA REPORT KARTU PIUTANG KONSUMEN. DIMANA ADA NILAI OUTSTANDING UNTUK MATERAI TAPI JUMLAH SALDO AKHIRNYA TIDAK SAMA DENGAN OUTSTANDING KARENA ADA SELISIH PPH.\n\nBERIKUT SAYA BERIKAN LAMPIRAN KARTU PIUTANG UNTUK DEBTOR KAV/0234/O DI MIE.\nTERIMA KASIH.', 'U0011', 6, 100, 'Y');
INSERT INTO `ticket` VALUES ('T201809190037', '2018-09-19 14:14:14', '2018-10-09 10:18:32', '2018-11-06 14:25:47', 'U0009', 'ast_desktop', 10, 'REPORT PROYEKSI PENERIMAAN', 'BISAKAH REPORT \"LAPORAN PROYEKSI PENERIMAAN\" (AR->REPORT->REPORT (SALES) -> NO.9, DIMUNCULKAN NILAI PAYMENT TRANSAKSI KPR. KARENA REPORT TERSEBUT NILAINYA TIDAK SAMA (JIKA ADA TRANSAKSI KPR) DENGAN KARTU PIUTANG KOMSUMEN.', 'U0011', 6, 100, 'Y');
INSERT INTO `ticket` VALUES ('T201809240038', '2018-09-24 09:53:40', '0000-00-00 00:00:00', '2018-09-24 10:42:10', 'U0006', 'ast_desktop', 7, 'ERROR ASSIGN METERS MANAGEMENT', 'DEAR TEAM AST,\nMOHON BANTUANNYA UNTUK DIPERBAIKI FORM ASSIGN METER ID TO LOT SAAT KLIK BUTTON SEARCH TERJADI ERROR SEPERTI LAPIRAN GAMBAR.\nTERIMA KASIH.', 'U0014', 6, 100, 'Y');
INSERT INTO `ticket` VALUES ('T201809260039', '2018-09-26 14:26:08', '2018-10-12 14:55:51', '2018-10-12 16:30:07', 'U0008', 'ast_desktop', 8, 'TAX FIELD DI CLOSING SPK (PENCAIRAN RETENSI)', 'DEAR TEAM AST, MOHON BANTUANNY UNTUK FORM CLOSING SPK DI MODULE SPK UNTUK DI TAMBAHKAN TAX FIELD, KARENA SAAT INI SERING TERJADI KASUS UNTUK PENCAIRAN RETENSI BERBEDA PENGENAAN PAJAK NY DENGAN PENCAIRAN PROGRESS SPK.', 'U0014', 6, 100, 'Y');
INSERT INTO `ticket` VALUES ('T201809270040', '2018-09-27 14:28:01', '0000-00-00 00:00:00', '2018-09-28 11:38:56', 'U0006', 'ast_desktop', 7, 'ERROR KWITANSI KM', 'DEAR TEAM AST,\nMOHON BANTUAANNYA UNTUK PRINT KWITANSI DI KM MUNCUL MESSAGE BOX PENTUNG SEPERTI GAMBAR YANG DILAMPIRKAN.\nTERIMAKASIH.', 'U0011', 6, 100, 'Y');
INSERT INTO `ticket` VALUES ('T201809280041', '2018-09-28 09:06:58', '0000-00-00 00:00:00', '2018-09-28 11:41:25', 'U0008', 'ast_desktop', 11, 'OR IPKL K11/007', 'DEAR TEAM AST, MOHON BANTUANNY UNTUK  IPKL UNIT K11/007 TERJADI ERROR SAAT ALOKASI DI OR AUTO, HISTORY NYA DIA ADA BAYAR PARTIAL INVOICE JC/IS/18/06/00842 UNTUK BULAN JUNI, KETIKA OUTSTANDING BLN JUNI DIBAYAR MUNCUL ERROR TSB.\nTERIMA KASIH.', 'U0011', 6, 100, 'Y');
INSERT INTO `ticket` VALUES ('T201809280042', '2018-09-28 10:13:58', '0000-00-00 00:00:00', '2018-10-01 11:05:16', 'U0009', 'ast_desktop', 10, 'FORM COMPLAIN ENTRY', 'PADA SAAT KLIK TOMBOL REVIEW DI FORM COMPLAIN ENTRY, PADA PILIHAN \"OPTION FINANNCE\" HANYA MENCENTANG BAGIAN PENGEMBALIAN KONSUMEN. SEDANGKAN PADA REPORT REVIEWNYA MUNCUL CATEGORY PENGEMBALIAN KONSUMEN DAN CALIM DENDA. MOHON BANTUANNYA DALA HAL INI.', 'U0011', 6, 100, 'Y');
INSERT INTO `ticket` VALUES ('T201810010043', '2018-10-01 09:29:32', '0000-00-00 00:00:00', '2018-10-17 10:59:47', 'U0006', 'ast_desktop', 11, 'UPDATE USER DAN AUDIT DATE TRANSAKSI REJECT DI GL', 'DEAR TEAM AST,\nMOHON BANTUANNYA, UNTUK TRANSAKSI REJECT PADA GL UNTUK TETAP SELALU UPDATE USER DAN AUDIT DATE NYA.\nTERIMA KASIH.', 'U0011', 6, 100, 'Y');
INSERT INTO `ticket` VALUES ('T201810010044', '2018-10-01 09:56:38', '0000-00-00 00:00:00', '2018-10-01 10:02:18', 'U0006', 'ast_desktop', 7, 'POSTING CREDIT NOTE OWNERSHIP', 'Duplicate Ticket', 'U0014', 6, 100, 'Y');
INSERT INTO `ticket` VALUES ('T201810010045', '2018-10-01 10:00:32', '0000-00-00 00:00:00', '2018-10-01 10:30:30', 'U0006', 'ast_desktop', 7, 'POSTING CREDIT NOTE OWNERSHIP', 'DEAR TEAM AST,\nMOHON BANTUANNYA, TIDAK BISA POSTING UNTUK NO PS/CN/18/09/00024 DAN MUNCUL MSG BOX SEPERTI LAMPIRAN.\nTERIMA KASIH', 'U0011', 6, 100, 'Y');
INSERT INTO `ticket` VALUES ('T201810040046', '2018-10-04 16:03:01', '0000-00-00 00:00:00', '2018-10-09 13:18:28', 'U0008', 'ast_desktop', 10, 'FORM BAST', 'DEAR TEAM AST, MOHON BANTUANNY UNTUK CHECK BAST UNTUK UNIT \n\n•	A17/080               : HERRI SANJAYA\n•	A17/086               : ARLIANY SUTANTA\n•	A8/117                  : YULIANA ITEH\n\nTIDAK BISA SERAH TERIMA', 'U0011', 6, 100, 'Y');
INSERT INTO `ticket` VALUES ('T201810050047', '2018-10-05 10:16:39', '0000-00-00 00:00:00', '2018-10-05 11:24:36', 'U0006', 'ast_desktop', 7, 'ERROR UNPOST CREDIT NOTE', 'DEAR TEAM AST,\nMOHON BANTUANNYA, SAAT MAU UNPOST CREDIT NOTE MUNCUL MSG BOX \'QUERY TIME OUT\'.\nNOTE: MAU UNPOST NO PS/CN/18/10/00006   \n\nTERIMA KASIH', 'U0011', 6, 100, 'Y');
INSERT INTO `ticket` VALUES ('T201810080048', '2018-10-08 15:48:12', '0000-00-00 00:00:00', '2018-11-06 14:55:07', 'U0008', 'ast_desktop', 7, 'VALIDASI FORM REVISION', 'DEAR TEAM AST, MOHON INFONYA UNTUK VALIDASI FORM REVISION BUKAN SEHARUSNYA NILAI NEW PAYMENT PLAN = NILAI OUTSTANDING?\nKARENA SAAT INI BANYAK TERJADI KESALAHAN REVISION KARENA TIDAK ADANYA VALIDASI DI FORM REVISION, TERIMA KASIH,', 'U0011', 6, 100, 'Y');
INSERT INTO `ticket` VALUES ('T201810110049', '2018-10-11 09:15:09', '0000-00-00 00:00:00', '2018-10-12 10:03:05', 'U0008', 'ast_desktop', 11, 'PL - SPK ACTIVITY TIDAK MUNCUL', 'DEAR TEAM AST, MOHON BANTUAN INFO NYA UNTUK ADD DETAIL ACTIVITY DI SPK ENTRY, DI CONT ACTIVITY ADA ACTIVITY YANG TIDAK ADA (TIDAK MUNCUL) PADAHAL DI MASTER BUDGER ACTIVITY TSB ADA,\nCONTOH DARI GAMBAR TERLAMPIR ADALAH ACTIVITY LANDSCAPE DENGAN KODE HEADER 6000, TIDAK MUNCUL DI SPK ENTRY, TERIMA KASIH', 'U0014', 6, 100, 'Y');
INSERT INTO `ticket` VALUES ('T201810160050', '2018-10-16 13:43:57', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'U0008', 'ast_desktop', 11, 'SPK CLOSE TIDAK MUNCUL', 'Duplicate Ticket', '', 6, 100, 'Y');
INSERT INTO `ticket` VALUES ('T201810160051', '2018-10-16 14:05:16', '0000-00-00 00:00:00', '2018-10-16 14:22:07', 'U0008', 'ast_desktop', 11, 'SPK CLOSE TIDAK MUNCUL', 'DEAR TEAM AST, MOHON BANTUANNY UNTUK CHECK SPK JC/CT/17/12/00002, PROGRESS SDH 100% TETAPI DI FORM SPK CLOSE TIDAK MUNCUL, \n\nBERIKUT LINK DOWNLOAD DB YANG DIPAKAI \n\nHTTPS://DRIVE.GOOGLE.COM/FILE/D/1GVWRR0M-KUG5-IMMPXHEUF-YW0BSPB20/VIEW?USP=SHARING\n\nTERIMA KASIH', 'U0014', 6, 100, 'Y');
INSERT INTO `ticket` VALUES ('T201810160052', '2018-10-16 16:06:36', '0000-00-00 00:00:00', '2018-10-16 16:10:38', 'U0008', 'ast_desktop', 7, 'SPK CLOSE DIRECT ERROR POST', 'DEAR TEAM AST, MOHON BANTUANNY UNTUK UPLOAD UPDATE SPK DIRECT ERROR SESUAI PEMBICARAAN DI WA, TERIMA KASIH.', 'U0014', 6, 100, 'Y');
INSERT INTO `ticket` VALUES ('T201810220053', '2018-10-22 16:36:43', '0000-00-00 00:00:00', '2018-11-06 14:52:36', 'U0005', 'ast_desktop', 7, 'CHECK INVOICE', 'SAAT POSTING INVOICE ENTRY DAN POSTING INVOICE BILLING TOLONG DI TAMBAHKAN PENGECEKAN JIKA BULAN INVOICE LEBIH KECIL DARI BULAN BERJALAN DI AST, TOLONG DITAMBAHKAN NOTIF : ACCESS DENIED..', 'U0011', 6, 100, 'Y');
INSERT INTO `ticket` VALUES ('T201810240054', '2018-10-24 16:28:20', '2018-10-25 11:49:48', '2018-10-25 11:50:38', 'U0008', 'ast_desktop', 7, 'ERROR APPROVE PPJB', 'DEAR TEAM AST, MOHON BANTUANNY UNTUK CHECK FORM ADMIN DOKUMEN UNTUK PENGINPUTAN PPJB, SETIAP APPROVE KELUAR ERROR INCOMPLETE ENTRY, TERIMA KASIH', 'U0011', 6, 100, 'Y');
INSERT INTO `ticket` VALUES ('T201810300055', '2018-10-30 17:40:41', '2018-10-31 10:08:38', '2018-11-06 14:59:09', 'U0008', 'ast_desktop', 11, 'START DATE DAN END DATE BILL IPKL HILANG', 'DEAR TEAM AST, MOHON BANTUANNYA UNTUK START DATE DAN END DATE UNTUK BILL IPKL KEMBALI HILANG, *TERLAMPIR CAPTURE DB TGL 30/10/2018', 'U0011', 6, 100, 'Y');
INSERT INTO `ticket` VALUES ('T201810310056', '2018-10-31 13:26:40', '0000-00-00 00:00:00', '2018-10-31 13:40:10', 'U0006', 'ast_desktop', 7, 'ERROR INSERT PROGRESS PROJECT SPK DIRECT', 'DEAR TEAM AST, MOHON BANTUANNYA TERJADI ERROR PADA SAAT MAU INSERT DETAIL PROGRESS PROJECT SPK DIRECT TOMBOL INSERT TIDAK DAPAT DIGUNAKAN. SEPERTI LAMPIRAN GAMBAR YG SAYA SERTAKAN.\n\nTERIMA KASIH.', 'U0014', 6, 100, 'Y');
INSERT INTO `ticket` VALUES ('T201811050057', '2018-11-05 17:21:53', '2018-11-07 13:03:33', '2018-11-07 13:28:30', 'U0006', 'ast_desktop', 11, 'SOURCE_CODE NULL DI ACC_GLTRANS', 'DEAR TEAM AST,\nMOHON BANTUANNYA ADA BEBERAPA DATA DI ACC_GLTRANS YANG SOURCE CODENYA NULL UNTUK PROSES AKAD KREDIT DAN SUPAYA KEDEPANNYA TIDAK TERJADI LAGI SEPERTI KASUS INI.\n\nTERIMA KASIH', 'U0011', 6, 100, 'Y');
INSERT INTO `ticket` VALUES ('T201811090058', '2018-11-09 10:01:50', '0000-00-00 00:00:00', '2018-11-13 11:05:59', 'U0018', 'ast_desktop', 10, 'TIDAK BISA PRINT', 'USER \"WIDYA\" SUDAH BEBERAPA KALI MENGALAMI TIDAK BISA PRINT. \nTEST PRINT MELALUI GRAPHON BISA, KEMUDIAN DI TEST MELALUI AST TOMBOL PRINTNYA TIDAK BISA DI KLIK SEPERTI GAMBAR. \nKEMUDIAN SAYA COBA PINDAH SERVER YANG AWALNYA MENGGUNAKAN GLOBAL1.MODERNLAND.CO.ID MENJADI GLOBAL.MODERNLAND.CO.ID DAN HASILNYA TOMBOL PRINTER DAPAT DI KLIK. ATAU SEBALIKNYA KETIKA LOGIN DI GLOBAL.MODERNLAND.CO.ID TIDAK BISA PRINT TAPI KETIKA DI PINDAH KE GLOBAL1.MODERNLAND.CO.ID MAKA TOMBOL PRINT MUNCUL. \nKASUS INI SUDAH TERJADI BEBERAPA KALI. \nUNTUK SPEED INTERNETNYA SENDIRI TIDAK ADA MASALAH SEPERTI GAMBAR.', 'U0014', 6, 100, 'Y');
INSERT INTO `ticket` VALUES ('T201811120059', '2018-11-12 09:49:53', '2018-11-13 09:01:19', '2018-11-13 09:12:39', 'U0006', 'ast_desktop', 8, 'APPROVE CONTRACT RENEWAL', 'DEAR TEAM AST,\nMOHON BANTUANNYA, UNTUK FORM APPROVE CONTRACT RENEWAL YANG ADA DI BILLING MANAGEMENTS DIPINDAH KE MODUL TENANCY MANAGEMENT.\nTERIMA KASIH', 'U0014', 6, 100, 'Y');
INSERT INTO `ticket` VALUES ('T201811120060', '2018-11-12 14:26:15', '2018-11-16 15:24:29', '2018-11-13 11:03:24', 'U0006', 'ast_desktop', 7, 'CONTRACT STANDING CHARGE SIGNING ENTRY TENANCY MAN', 'DEAR TEAM AST, \nMOHON BANTUANNYA, PADA SAAT INPUT OTHER CHARGE PADA CONTRACT STANDING CHARGE ENTRY KEMUDIAN SAAT FORM DITUTUP DAN DIBUKA LAGI DATA PADA OTHER CHARGE TERSEBUT HILANG, TAPI SAAT DI CEK DI DB DATA TERSEBUT MUNCUL', 'U0011', 6, 100, 'Y');
INSERT INTO `ticket` VALUES ('T201811140061', '2018-11-14 16:25:59', '2018-11-21 15:57:53', '2018-11-14 17:13:03', 'U0006', 'ast_desktop', 7, 'ERROR GENERATE BILLING KM', 'DEAR TEAM AST, MOHON BANTUANNYA TERJADI ERROR SAAT MAU GENERATE BILLING PADA PROJECT KM.\nCONTOH DATA YANG TIDAK BISA DI GENERATE \'LK-17/0001\'\nTERIMA KASIH.', 'U0014', 6, 100, 'Y');
INSERT INTO `ticket` VALUES ('T201811230062', '2018-11-23 09:17:42', '0000-00-00 00:00:00', '2018-11-23 10:30:11', 'U0006', 'ast_desktop', 11, 'DATA ERROR FIX ASSET', 'DEAR TEAM AST, MOHON BANTUANNYA TERDAPAT TEMUAN DATA UNTUK VOUCHER KM/SF/18/09/00001 NILAI SOURCE_CODE DAN TRX_TYPE BERBEDA ANTARA HEADER DAN DETAIL. DAN TOLONG UNTUK TRANSAKSI INI JANGAN DI HARD CODE.\nTERIMA KASIH.', 'U0014', 6, 100, 'Y');
INSERT INTO `ticket` VALUES ('T201811260063', '2018-11-26 16:29:57', '2018-11-28 09:44:59', '0000-00-00 00:00:00', 'U0008', 'ast_desktop', 7, 'PENGALIHAN HAK MODUL OWNERSHIP', 'DEAR TEAM AST, MOHON BANTUANNYA UNTUK FORM  PENGALIHAN HAK OWNERSHIP DIBERI VALIDASI HARUS SAVE DATA TERLEBIH DAHULU SEBELUM KLIK APPROVE, KARENA USER SERING KALI LANGSUNG APPROVE, MEMBUAT DATA HISTORY PENGALIHAN TIDAK TERECORD DI SYSTEM. TERIMA KASIH', 'U0011', 6, 100, 'Y');
INSERT INTO `ticket` VALUES ('T201812040064', '2018-12-04 14:05:36', '0000-00-00 00:00:00', '2018-12-04 14:47:31', 'U0006', 'ast_desktop', 11, 'CREDIT NOTE OWNERSHIP', 'DEAR AST,\nSAAT USER MAU INPUT CREDIT NOTE OWNERSHIP UNTUK DEBTOR KAV/0295/O DENGAN NO CN \'PS/CN/18/12/00002\' DAN NO INV  \'PS/IV/17/12/00003\' TAPI DI FORM CN TIDAK MUNCUL UNTUK NO INV TERSEBUT. KENAPA BISA SEPERTI INI YA?\nMOHON BANTUANNYA. TERIMA KASIH', 'U0011', 6, 100, 'Y');
INSERT INTO `ticket` VALUES ('T201812110065', '2018-12-11 10:38:45', '2018-12-11 16:04:10', '0000-00-00 00:00:00', 'U0006', 'ast_desktop', 7, 'GENERATE CHANGE RATE ERROR', 'DEAR TEAM AST, MOHON BANTUAANYA TERDAPAT ERROR GENERATE CHANGE RATE PADA MODUL OWNERSHIP MANAGEMENT SEPERTI GAMBAR TERLAMPIR.\nTERIMA KASIH', 'U0011', 6, 100, 'Y');
INSERT INTO `ticket` VALUES ('T201812140066', '2018-12-14 14:17:14', '2018-12-14 16:22:57', '0000-00-00 00:00:00', 'U0008', 'ast_desktop', 7, 'ALOKASI OR SALES', 'DEAR TEAM AST, MOHON BANTUAN INFONYA UNTUK ALOKASI OR UNIT NE/30B DI MSM, TIDAK BISA ALOKASI FULL TERHADAP NILAI BALANCE, TERDETEKSI OVERPAYMENT PADA OR TERSEBUT,\nTERIMA KASIH.', 'U0011', 6, 100, 'Y');
INSERT INTO `ticket` VALUES ('T201812190067', '2018-12-19 14:57:32', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'U0017', 'ast_desktop', 7, 'INVOICE PPH DEBIT NOTE', 'DEAR TEAM AST,\nMOHON BANTUAN NYA CEK FORM DEBIT NOTE, KARENA PADA SAAT POSTING DEBIT NOTE TERHADAP INVOICE YANG TERDAPAT PPH NYA DIA TERBENTUK JURNAL PPH.. \nSEDANG KAN PENGAKUAN PPH DI KITA PADA SAAT PEMBAYARAN.\n\nTERIMA KASIH', 'U0014', 6, 100, 'Y');
INSERT INTO `ticket` VALUES ('T201812190068', '2018-12-19 16:26:45', '0000-00-00 00:00:00', '2018-12-27 15:23:14', 'U0008', 'ast_desktop', 7, 'ERROR FIELD TOT OR FORM CANCELLATION', 'DEAR TEAM AST, MOHON INFO DAN BANTUANNY UNTUK FORM CANCELLATION, NILAI OR DI FORM TIDAK SAMA DENGAN DI KARTU PIUTANG, TERIMA KASIH', 'U0014', 6, 100, 'Y');
INSERT INTO `ticket` VALUES ('T201812280069', '2018-12-28 14:15:13', '2019-01-04 08:53:12', '2018-12-28 14:27:54', 'U0008', 'ast_desktop', 10, 'DN PRINT VOUCHER ERROR', 'DEAR TEAM AST, MOHON BANTUANNYA UNTUK CHECK PRINT VOUCHER DN TIDAK KELUAR NILAI DEBIT KREDIT NYA.\n\nTERIMA KASIH', 'U0014', 6, 100, 'Y');
INSERT INTO `ticket` VALUES ('T201901020070', '2019-01-02 11:10:47', '2019-01-10 14:18:11', '2019-01-30 17:17:56', 'U0005', 'ast_desktop', 11, 'ALTER NAMA KONSUMEN SALES', 'DI ENTITY MDL, PROJECT KM ADA KASUS DIMANA ADA NAMA KONSUMENNYA > DARI 60 KARAKTER. \nTOLONG DITABLE2 TERKAIT DENGAN MASTER KONSUMEN SALES DIALTER MENJADI 150 KARAKTER AGAR NAMA KONSUMEN BISA MUNCUL DI SP BOOKING ENTRY,', 'U0014', 6, 100, 'Y');
INSERT INTO `ticket` VALUES ('T201901030071', '2019-01-03 15:34:35', '2019-01-04 10:26:40', '0000-00-00 00:00:00', 'U0008', 'ast_desktop', 10, 'LAPORAN AGING KONSUMEN SUMMARY', 'DEAR TEAM AST, MOHON BANTUANNYA UNTUK CHECK LAPORAN AGING KONSUMEN SUMMARY, UNTUK PERIODE 31-90 HARI, KENAPA 0 SEMUA YA?\n\nTERIMA KASIH,', 'U0014', 6, 100, 'Y');
INSERT INTO `ticket` VALUES ('T201901080072', '2019-01-08 13:11:19', '2019-01-08 13:29:10', '2019-01-09 17:05:06', 'U0008', 'ast_desktop', 9, 'KWITANSI OR AUTO (IPKL)', 'DEAR TEAM AST, MOHON BANTUANNYA UNTUK SET FILE RPT TERLAMPIR HANYA UNTUK PROJECT JC, RPT TERLAMPIR UNTUK KWITANSI OR AUTO (IPKL).\n\nTERIMA KASIH.', 'U0014', 6, 100, 'Y');
INSERT INTO `ticket` VALUES ('T201901080073', '2019-01-08 17:38:02', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'U0008', 'ast_desktop', 10, 'REPORT KARTU HUTANG AP PAYMENT', 'DEAR TEAM AST, MOHON BANTUANNYA UNTUK CHECK REPORT KARTU HUTANG, KARENA UTK REPORT INI SUDAH 3 HARI PROSES LOAD NY BERAT,\nRANGE WAKTU 5-20 MENIT, KADANG TIDAK TERBUKA SAMA SEKALI.\n\nTERIMA KASIH', 'U0014', 6, 0, 'Y');
INSERT INTO `ticket` VALUES ('T201901100074', '2019-01-10 14:42:38', '0000-00-00 00:00:00', '2019-01-14 09:30:10', 'U0006', 'ast_desktop', 11, 'DATA FILTER ENTITY', 'DEAR TEAM AST, MOHON BANTUANNYA ADA TEMUAN PADA DATA ENTITY MIE MASUK KE ENTITY HO. SEPERTI GAMBAR YANG DI KIRIM.\n\nTERIMA KASIH.', 'U0014', 6, 100, 'Y');
INSERT INTO `ticket` VALUES ('T201901110075', '2019-01-11 15:32:26', '2019-01-16 13:17:27', '2019-05-06 16:14:18', 'U0005', 'ast_desktop', 11, 'SALAH PERHITUNGAN INTEREST PENALTY OWNERSHIP', 'UNTUK DENDA OWNERSHIP, DENDA DIHITUNG FLAT, JGN MENGGULUNG.\nDAN PERHITUNGAN DENDA BERDASARKAN DPP.\nCONTOH MASALAH:\nUNIT NV2/022/O, NILAI INVOICE PER BULAN, 271040,\nDENDA BULAN NOV DAN DES ADALAH 49290, DAN MASING2 DENDA BERNILAI 24640\n\nNOTES: FILE A.PNG TERDAPAT INVOICE DENDA MANUAL, MERUPAKAN NILAI YANG DENDA YANG BENAR.', 'U0011', 6, 100, 'Y');
INSERT INTO `ticket` VALUES ('T201901120076', '2019-01-22 10:15:39', '2019-01-23 14:02:46', '2019-01-23 14:45:53', 'U0008', 'ast_desktop', 8, 'VALIDASI TEXT BOX FORM SPK CLOSE', 'DEAR TEAM AST, MOHON BANTUANNYA UNTUK MEMUNCULKAN ALERT BOX SETIAP AKSI SAVE PADA FORM SPK CLOSE DENGAN ISI\n\" MOHON CHECK KEMBALI TANGGAL CLOSING SEBELUM APPROVE\",\n\nMOHON DIBUATKAN UNTUK MODULE SPK DAN SPK DIRECT\n\nTERIMA KASIH.\n\nHERI', 'U0014', 6, 100, 'Y');
INSERT INTO `ticket` VALUES ('T201901160077', '2019-01-16 13:13:56', '2019-01-16 13:50:47', '2019-01-30 17:18:25', 'U0006', 'ast_desktop', 8, 'REQUST FILTER DI SERTIFIKAT INDUK AST', 'DEAR TEAM AST,\nMOHON BANTUANNYA, SEHUBUNGAN DENGAN PENGINPUTAN DATA KE SERTIFIKAT INDUK AST TERDAPAT KENDALA YAITU ADANYA GABUNGAN DATA DARI SEMUA DESA YANG MASUK KE SERTIFIKAT INDUK DI AST, UNTUK ITU KAMI MENGAJUKAN UNTUK ADANYA PENAMBAHAN BERUPA FILTER UNTUK MENCARI DATA BERDASARKAN DESA DAN NO. SERTIFIKAT. \nTERIMA KASIH.', 'U0014', 6, 100, 'Y');
INSERT INTO `ticket` VALUES ('T201901160078', '2019-01-25 16:11:00', '2019-02-20 11:40:06', '2019-03-12 13:46:50', 'U0008', 'ast_desktop', 10, 'DEBTOR IPKL DOUBLE', 'DEAR TEAM AST, MOHON BANTUANNYA CHECK DEBTOR IPKL E8/39/O UNTUK BILLINGANNYA TERDAPAT 2, DAN UNTUK SEBAGIAN BILLINGAN YANG SUDAH DI APPROVE DI STANDING CHARGE TIDAK MUNCUL DI MAINTAIN BILING.\n\n\nTERIMA KASIH', 'U0011', 6, 100, 'Y');
INSERT INTO `ticket` VALUES ('T201901160079', '2019-01-16 15:36:41', '2019-01-17 09:27:05', '2019-01-25 09:36:10', 'U0008', 'ast_desktop', 11, 'SPK CLOSE JC/CT/16/05/00009', 'DEAR TEAM AST, MOHON BANTUAN DAN INFORMASI NYA UNTUK INVOICE YANG TERBENTUK PADA SAAT CLOSING SPK JC/CT/16/05/00009 PADA TANGGAL 11/01/2019, SAAT DIPOSTING MUNCUL INVOICE DENGAN NO JC/IP/18/04/00193 DENGAN AUDIT DATE 04/04/2018.\n\nTERLAMPIR LINK DB TGL 10 JANUARI SEBELUM INVOICE CLOSING TERBENTUK\nHTTPS://DRIVE.GOOGLE.COM/FILE/D/1DXJ1J_QHAK-MPZAT6-PPEACRUEA6T2_V/VIEW?USP=SHARING\n\nTERIMA KASIH\n\nHERI', 'U0014', 6, 100, 'Y');
INSERT INTO `ticket` VALUES ('T201901180080', '2019-01-18 11:58:46', '2019-01-18 14:13:33', '2019-01-30 17:22:05', 'U0006', 'ast_desktop', 8, 'REQUST VIRTUAL ACCOUNT', 'DEAR TEAM AST,\nMOHON BANTUANNYA UNTUK DITAMBAHKAN UPLOAD VIRTUAL ACCOUNT (VA) UNTUK BANK NIAGA.\nTERIMA KASIH.', 'U0014', 6, 100, 'Y');
INSERT INTO `ticket` VALUES ('T201901220081', '2019-01-22 09:47:00', '2019-01-23 14:30:14', '2019-01-25 09:36:23', 'U0008', 'ast_desktop', 7, 'ERROR AR TAX POSTING', 'DEAR TEAM AST, MOHON BANTUAN DAN INFONYA UNTUK CHECK FORM AR TAX POSTING, KETIKA KLIK \'REFRESH\' DATA TIDAK KELUAR DAN KELUAR POP UP ERROR SEPERTI DI LAMPIRAN GAMBAR.\n\nTERIMA KASIH\n\nHERI', 'U0014', 6, 100, 'Y');
INSERT INTO `ticket` VALUES ('T201901300082', '2019-01-30 09:17:15', '2019-02-20 11:40:11', '2019-03-06 11:30:16', 'U0005', 'ast_desktop', 10, 'KWITANSI OR AUTO', 'SALAH PERHITUNGAN DETAIL KWITANSI OR AUTO, \nJIKA ADA KONSUMEN MEMBAYAR 3 BULAN IPKL, MAKA SEHARUSNYA NILAI DPP DAN PPN NYA JUGA DIKALIKAN 3', 'U0011', 6, 100, 'Y');
INSERT INTO `ticket` VALUES ('T201901300083', '2019-01-30 18:13:13', '2019-03-06 17:02:47', '2019-04-30 16:28:46', 'U0008', 'ast_desktop', 8, 'INVOICE SPK CLOSE', 'DEAR TEAM AST, MOHON BANTUANNYA UNTUK INVOICE YANG TERBENTUK KETIKA PROSES CLOSING SPK, DESCRIPSI NYA DI AMBIL DARI NOTES YANG ADA DI HEADER SPK ENTRY, SEPERTI INVOICE YANG BERASAL DARI PROSES PROGRESS PROJEK\n\nTERIMA KASIH \n\nHERI', 'U0014', 6, 100, 'Y');
INSERT INTO `ticket` VALUES ('T201902010084', '2019-02-01 16:52:15', '2019-03-06 16:16:54', '2019-03-21 13:44:14', 'U0006', 'ast_desktop', 11, 'ERROR TEST INVOICE MANUAL UNTUK VA CIMB NIAGA', 'DEAR TEAM AST,\nMOHON BANTUANNYA, SAAT SAYA SEDANG TEST INPUT INVOICE MANUAL UNTUK VA CIMB NIAGA TERJADI ERROR PADA TRX_AMOUNT. PADA BASE_AMOUNT = 270.000 , TAX_AMOUNT = 27.000 SEMESTINYA NILAI TRX_AMOUNT = 297.000 , TAPI DI FORM TRX_AMOUNT = 270.000 ATAU TIDAK TER UPDATE. TAPI SETELAH DI CEK KE KAERTU PIUTANG SETELAH DI POSTING SALDO UNTUK INV TSB 297.000.\nMOHON BANTUANNYA SUPAYA SAYA KITA TAB ATAU SAVE ULANG DAPAT LANGSUNG TERUPDATE NILAI YG SEMESTINYA.\nBERIKUT SAYA LAMPIRKAN SCREENSHOT FORM INVOICE DAN KARTU PIUTANG.\n\nTERIMA KASIH.', 'U0011', 6, 100, 'Y');
INSERT INTO `ticket` VALUES ('T201902070085', '2019-02-07 14:24:12', '2019-03-05 16:49:14', '2019-03-06 17:02:31', 'U0006', 'ast_desktop', 10, 'ERROR DOWNLOAD DATA DETAIL PEMBELIAN TANAH', 'DEAR TEAM AST, MOHON BANTUANNYA TERJADI ERROR PADA SAAT MAU LIHAT GAMBAR PETA PADA DETAIL PEMBELIAN TANAH. SAAT DI SCROLL MUNCUL MSGBOX SEPERTI PADA GAMBAR.\nTERIMA KASIH', 'U0014', 5, 100, 'Y');
INSERT INTO `ticket` VALUES ('T201902210086', '2019-02-21 11:10:48', '2019-02-22 13:46:13', '2019-03-06 11:05:28', 'U0008', 'ast_desktop', 7, 'ERROR FORM AR TAX POSTING', 'DEAR TEAM AST, MOHON BANTUANNYA UNTUK PROSES AR TAX POSTING MUNCUL ERROR SEPERTI GAMBAR TERLAMPIR, TERIMA KASIH\n\nHERI', 'U0011', 6, 100, 'Y');
INSERT INTO `ticket` VALUES ('T201902260087', '2019-02-26 14:16:08', '2019-03-06 15:54:31', '2019-03-06 16:02:49', 'U0008', 'ast_desktop', 8, 'SPK CLOSE TIDAK MUNCUL', 'DEAR TEAM AST, MOHON BANTUANNYA KEMBALI UNTUK SPK MS/CT/18/08/00005 DI ENTITY MSM PROGRESS SDH 100% TAPI DI SPK CLOSE TIDAK MUNCUL, \n\nTERIMA KASIH', 'U0014', 6, 100, 'Y');
INSERT INTO `ticket` VALUES ('T201903040088', '2019-03-04 14:32:57', '2019-03-06 15:17:22', '0000-00-00 00:00:00', 'U0008', 'ast_desktop', 11, 'TIDAK MUNCUL DEBTOR OWNERSHIP', 'DEAR TEAM AST,\n\nMOHON BANTUANNYA UNTUK DEBTOR C2/6/O DIA SUDAH SERAH TERIMA TAPI TIDAK ADA DI PM_TENANCY.\n\nTERIMA KASIH,\n\nHERI', 'U0011', 6, 100, 'Y');
INSERT INTO `ticket` VALUES ('T201903130089', '2019-03-13 08:30:23', '2019-03-21 13:58:31', '2019-04-26 12:36:34', 'U0008', 'ast_desktop', 11, 'RETENSI SPK', 'DEAR TEAM AST, MOHON BANTUAN DAN INFO NYA PADA SAAT SPK CLOSE UNTUK PEMBENTUKAN INVOICE RETENSI SPK JC/CT/18/07/00004             , NILAI RETENSI YANG TERBENTUK 3.886.475.29, KALAU PERHITUNGAN SEHARUS NYA UNTUK 2,5%  6,728,865.00.\n\nNOTE = ADA ADDENDUM KURANG SEBESAR -46.835.800.00 UTK SPK TSB\n\nTERIMA KASIH', 'U0011', 6, 100, 'Y');
INSERT INTO `ticket` VALUES ('T201903190090', '2019-03-19 17:20:01', '2019-03-21 13:46:58', '2019-04-26 16:34:24', 'U0006', 'ast_desktop', 8, 'REQUEST PERPANJANG BARIS SPH DI AST', 'DEAR TEAM AST, MOHON BANTUANNYA UNTUK PENAMBAHAN BARIS SPH DI AST DIPERPANJANG MENJADI 25 BARIS. TERIMA KASIH.', 'U0011', 6, 100, 'Y');
INSERT INTO `ticket` VALUES ('T201903200091', '2019-03-20 14:59:22', '2019-03-21 13:36:37', '0000-00-00 00:00:00', 'U0006', 'ast_desktop', 8, 'REQUEST DETAIL PMBELIAN TANAH', 'DEAR TEAM AST, MOHON BANTUANNYA PADA DETAIL PEMBELIAN TANAH SAAT STATUSNYA \'BEBAS\' UNTUK PEMBELIAN TANAH DAN HARGA TANAH /M2 SUPAYA DI LOCK / DISABLE. SUPAYA NILAI TIDAK DAPAT DIRUBAH LAGI.\nTERIMA KASIH', 'U0014', 4, 0, 'Y');
INSERT INTO `ticket` VALUES ('T201903210092', '2019-03-21 12:34:42', '2019-03-21 12:43:24', '0000-00-00 00:00:00', 'U0002', 'ast_desktop', 7, 'TES', 'KJSGDGKJ', 'U0016', 5, 0, 'Y');
INSERT INTO `ticket` VALUES ('T201903210093', '2019-03-21 15:01:23', '2019-04-01 11:06:29', '0000-00-00 00:00:00', 'U0005', 'ast_desktop', 7, 'ERROR REFRESH UNPOST INVOICE', 'SAAT MEMBUKA FORM UNPOST INVOICE (SALES), SAAT SETTING DATE , KEMUDIAN REFRESH, LANGSUNG MUNCUL ERROR. FILE TERLAMPIR.', 'U0011', 5, 0, 'Y');
INSERT INTO `ticket` VALUES ('T201904040094', '2019-04-04 11:55:20', '2019-04-04 14:01:43', '0000-00-00 00:00:00', 'U0005', 'ast_desktop', 7, 'MUNCUL NOTIF CASHIERCURSOR DI FORM CASHBOOK', 'SAAT INGIN POSTING NOMOR CASHBOOK, SAAT KLIK POSTING DAN MASUKKAN PASSWORD MUNCUL NOTIF CASHIERCURSOR ALREADY EXIST.', 'U0011', 5, 0, 'Y');
INSERT INTO `ticket` VALUES ('T201904080095', '2019-04-08 15:28:08', '2019-04-30 10:53:20', '0000-00-00 00:00:00', 'U0005', 'ast_desktop', 11, 'COUNTER DOC NO MUNDUR SENDIRI', 'SAAT USER INGIN INPUT DATA, COUNTER MUNDUR SENDIRI SEHINGGA SAAT USER INPUT KARENA ADA PK DOUBLE', 'U0014', 5, 0, 'Y');
INSERT INTO `ticket` VALUES ('T201904240096', '2019-04-24 17:23:55', '2019-04-30 11:01:09', '0000-00-00 00:00:00', 'U0006', 'ast_desktop', 8, 'REQUEST CHECKBOX DETAIL PEMBELIAN TANAH', 'DEAR TEAM AST,\nMOHON BANTUANNYA UNTUK MENAMBAHKAN 1 CHECKBOX, YANG BISA DIPAKAI SAAT TANAH SUDAH BISA DIUBAH STATUSNYA MENJADI BEBAS.\n\nTERIMA KASIH', 'U0014', 4, 0, NULL);
INSERT INTO `ticket` VALUES ('T201904240097', '2019-04-24 17:27:09', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'U0006', 'ast_desktop', 8, 'REQUEST FILTNER NAMA DESA PADA SERTIFIKAT INDUK', 'DEAR TEAM AST,\n\nMOHON BANTUANNYA UNTUK MENAMBAHKAN FITLER UNTUK NAMA DESA PADA SERTIFIKAT INDUK, SEPERTI REQUEST KAMI SAAT MEETING TGL 24/04/2019.\n\nTERIMA KASIH', '', 1, 0, NULL);
INSERT INTO `ticket` VALUES ('T201904250098', '2019-04-25 16:40:09', '2019-05-15 09:29:34', '2019-05-15 09:30:38', 'U0005', 'ast_desktop', 11, 'NILAI LAPORAN KARTU PIUTANG + DENDA SALAH', 'PERHITUNGAN DENDA BOOKING  KONSUMEN SALAH. \nCONTOH UNIT GG/06/GJ\nCONTOH INV KM/IS/18/02/00010 ,TGL INV NYA 28/02/18, TGL HARI INI 25/04/19 , DENDA  NYA : 421 HARI 0.01 NILAI INV', 'U0011', 6, 100, 'Y');
INSERT INTO `ticket` VALUES ('T201904290099', '2019-04-29 11:22:41', '2019-04-30 11:02:48', '2019-06-20 11:38:27', 'U0006', 'ast_desktop', 8, 'REQUEST FLAG PADA FORM DETAIL PEMBELIAN TANAH', 'DEAR TEAM AST,\nMOHON BANTUANNYA UNTUK MENAMBAHKAN 1 FLAG PADA FORM DETAIL PEMBELIAN TANAH.\nFLAG INI DIGUNAKAN UNTUK INFO PADA ORANG ACCOUNTING JIKA NO SPH TERSEBUT SUDAH BISA DIUBAH STATUSNYA MENJADI BEBAS.\nPOSISI FLAG DIMINTA BERADA DI SAMPING STATUS PEMBEBASAN.\n\nUNTUK ISSUE INI SUDAH TEAM SYSDEV DAN AST BAHAS SAAT MEETING 24 APRIL 2019.\n\nTERIMA KASIH.', 'U0014', 5, 100, 'Y');
INSERT INTO `ticket` VALUES ('T201904290100', '2019-04-29 13:41:24', '2019-05-15 09:29:40', '2019-05-15 09:31:16', 'U0005', 'ast_desktop', 7, 'TIDAK BISA GENERATE DI FORM LAND ACUQUSITION', 'EROR SAAT KLIK TOMBOL GENERATE', 'U0011', 6, 100, 'Y');
INSERT INTO `ticket` VALUES ('T201904290101', '2019-04-29 16:33:56', '2019-06-20 11:45:44', '2019-06-20 11:47:16', 'U0005', 'ast_desktop', 10, 'REPORT CUSTOMER SERVICE', 'SAAT KLIK TOMBOL PRINT DI FORM CUSTOMER SERVICE, MUNCUL EROR NOTIF KOSONG', 'U0014', 5, 100, 'Y');
INSERT INTO `ticket` VALUES ('T201905020102', '2019-05-02 14:08:09', '2019-06-20 11:49:30', '2019-06-20 11:50:58', 'U0005', 'ast_desktop', 8, 'EROR SAAT KLIK SAVE DI CUSTOMER SERVICE', 'SAAT KLIK TOMBOL SAVE, MUNCUL EROR', 'U0014', 5, 100, 'Y');
INSERT INTO `ticket` VALUES ('T201905030103', '2019-05-03 15:31:47', '2019-05-06 13:37:52', '2019-06-20 09:47:16', 'U0002', 'ast_desktop', 10, 'TEST  UPLOAD', 'TESRGF', 'U0014', 5, 100, '');
INSERT INTO `ticket` VALUES ('T201905060104', '2019-05-06 13:21:16', '2019-05-06 13:37:47', '2019-05-07 11:33:00', 'U0006', 'ast_desktop', 11, 'SPK PROGRESS PROJECT MIE', 'DEAR TEAM AST, MOHON BANTUANNYA PADA PROGRESS PROJECT MIE NO PS/CT/17/08/00002  NO.REFF 11/MIE/DIR/SPPK/17 UNTUK DETAIL PADA FORM PROGRESS PROJECT TIDAK MUNCUL PADA PEMBAYARAN KE II DAN III. \n\nTERIMA KASIH', 'U0014', 6, 100, 'Y');
INSERT INTO `ticket` VALUES ('T201905070105', '2019-05-07 15:05:49', '2019-06-10 10:07:41', '2019-06-10 10:12:20', 'U0008', 'ast_desktop', 8, 'VALIDASI SPK CLOSE', 'TICKET INI DIBUAT UNTUK UPDATE VALIDASI PADA FORM SPK CLOSE', 'U0014', 6, 100, 'Y');
INSERT INTO `ticket` VALUES ('T201905130106', '2019-05-13 13:19:15', '2019-05-15 09:31:45', '0000-00-00 00:00:00', 'U0008', 'ast_desktop', 9, 'REPORT AJB PROSES', 'DEAR TEAM AST, MOHON BANTUAN DAN INFONYA UNTUK PRINT REPORT AJB MEMANGGIL DEBTOR ATAU KODE UNIT? KARENA KETIKA DI PRINT, DATA UNIT TSB TIDAK ADA DI REPORT AJB.\n\nTERIMA KASIH', 'U0011', 4, 0, 'Y');
INSERT INTO `ticket` VALUES ('T201905270107', '2019-05-27 14:51:50', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'U0008', 'ast_desktop', 7, 'CUSTOMER AJB', 'DEAR TEAM AST, MOHON BANTUANNYA UNTUK UNIT YANG PENGALIHAN KE CUSTOMER BARU MOHON DI UPDATE JUGA DI DATA AJB DAN VIEW PDA FORM CUSTOMER AJB, KARENA SAAT INI UNIT YANG PENGALIHAN MASIH DENGAN NAMA CUSTOMER LAMA.\n\nTERIMA KASIH', '', 1, 0, NULL);
INSERT INTO `ticket` VALUES ('T201906190108', '2019-06-19 09:59:51', '2019-06-20 09:45:49', '0000-00-00 00:00:00', 'U0006', 'ast_desktop', 10, 'ERROR REPORT KARTU HUTANG SPK', 'DEAR TEAM AST, MOHON BANTUANNYA UNTUK MEMPERBAIKI REPORT KARTU HUTANG SPK DIMANA ADA INVOICE YANG PEMBAYARANNYA DIBAGI MENJADI 2.\nPADA PEMBAYARAN PERTAMA : NILAI INVOICE - NILAI BAYAR 1 = SALDO\n\nPEMBAYARAN KEDUA : INVOICE - NILAI BAYAR 2 = SALDO YG NILAINYA LEBIH BESAR, (KARENA NILAI INVOICE - NILAI BAYAR 2).\n\nYANG SEMESTINYA PADA PEMBAYARAN KE-2 : NILAI SALDO - NILAI BAYAR 2.\nBERIKUT SALAH SATU CONTOH REPORT YANG SAYA LAMPIRKAN.\n\nTERIMA KASIH.', 'U0014', 5, 0, 'Y');
INSERT INTO `ticket` VALUES ('T201908120109', '2019-08-12 11:17:31', '2019-08-21 11:49:01', '0000-00-00 00:00:00', 'U0002', 'ast_desktop', 7, 'TES LAGI', 'PROGRAM ANDROID', 'U0016', 4, 0, NULL);

-- ----------------------------
-- Table structure for tracking
-- ----------------------------
DROP TABLE IF EXISTS `tracking`;
CREATE TABLE `tracking`  (
  `id_tracking` int(11) NOT NULL AUTO_INCREMENT,
  `id_ticket` varchar(13) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tanggal` datetime NOT NULL,
  `tanggal_selesai` date DEFAULT NULL,
  `hari` int(2) DEFAULT NULL,
  `bulan` int(2) DEFAULT NULL,
  `tahun` int(4) DEFAULT NULL,
  `status` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `deskripsi` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `id_user` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id_tracking`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1287 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tracking
-- ----------------------------
INSERT INTO `tracking` VALUES (337, 'T201805210001', '2018-05-21 09:15:38', NULL, NULL, NULL, NULL, 'Created Ticket', 'TIKET DI BUAT', 'U0005');
INSERT INTO `tracking` VALUES (338, 'T201805210001', '2018-05-21 09:17:57', NULL, NULL, NULL, NULL, 'Ticket disetujui', 'TICKET DIBERIKAN KEPADA VENDOR SUPPORT', 'U0011');
INSERT INTO `tracking` VALUES (339, 'T201805210001', '2018-05-21 09:27:05', NULL, NULL, NULL, NULL, 'Diproses oleh vendor support', '', 'U0011');
INSERT INTO `tracking` VALUES (340, 'T201805210001', '2018-05-21 09:29:33', NULL, NULL, NULL, NULL, 'Up Progress To 0 %', 'DIPOSESBARU', 'U0011');
INSERT INTO `tracking` VALUES (341, 'T201805210001', '2018-05-21 09:45:10', NULL, NULL, NULL, NULL, 'Up Progress To 100 %', 'SELESAI', 'U0011');
INSERT INTO `tracking` VALUES (342, 'T201805210001', '2018-05-21 10:11:17', NULL, NULL, NULL, NULL, 'Unsolved', 'Belum Tuntas', 'U0005');
INSERT INTO `tracking` VALUES (343, 'T201805210001', '2018-05-21 10:11:58', NULL, NULL, NULL, NULL, 'Diproses oleh vendor support', '', 'U0011');
INSERT INTO `tracking` VALUES (344, 'T201805210001', '2018-05-21 10:12:06', NULL, NULL, NULL, NULL, 'Up Progress To 0 %', 'PROSES KEMBALI', 'U0011');
INSERT INTO `tracking` VALUES (345, 'T201805210001', '2018-05-21 10:18:51', NULL, NULL, NULL, NULL, 'Up Progress To 100 %', 'FINISH', 'U0011');
INSERT INTO `tracking` VALUES (346, 'T201805210001', '2018-05-21 10:20:32', NULL, NULL, NULL, NULL, 'Unsolved', 'Masih belum selesai', 'U0005');
INSERT INTO `tracking` VALUES (347, 'T201805210001', '2018-05-21 10:26:48', NULL, NULL, NULL, NULL, 'Diproses oleh vendor support', '', 'U0011');
INSERT INTO `tracking` VALUES (348, 'T201805210001', '2018-05-21 10:27:02', NULL, NULL, NULL, NULL, 'Up Progress To 0 %', 'PROSES LAGI', 'U0011');
INSERT INTO `tracking` VALUES (349, 'T201805210001', '2018-05-21 10:32:18', NULL, NULL, NULL, NULL, 'Up Progress To 100 %', 'ENDING', 'U0011');
INSERT INTO `tracking` VALUES (462, 'T201805300003', '2018-05-30 08:56:26', NULL, NULL, NULL, NULL, 'Created Ticket', 'TIKET DI BUAT', 'U0009');
INSERT INTO `tracking` VALUES (463, 'T201805280002', '2018-06-07 11:47:34', NULL, NULL, NULL, NULL, 'Created Ticket', 'TIKET DI BUAT', 'U0005');
INSERT INTO `tracking` VALUES (475, 'T201805300003', '2018-07-04 09:02:32', NULL, NULL, NULL, NULL, 'Ticket disetujui', 'TICKET DITERIMA VENDOR SUPPORT', 'U0011');
INSERT INTO `tracking` VALUES (476, 'T201805300003', '2018-07-04 09:04:21', NULL, NULL, NULL, NULL, 'Up Progress To 0 %', 'PAK RANGGAUNG,\n\nUNTUK CASE INI BUKAN NYA UDAH DIPERBAIKI YAH?\nINI TICKETING UNTUK TEST ATAU BUKAN YA PAK?\n\nTHANKS\nHOTNIEL SILAEN', 'U0011');
INSERT INTO `tracking` VALUES (490, 'T201807060004', '2018-07-06 14:31:31', NULL, NULL, NULL, NULL, 'Created Ticket', 'TIKET DI BUAT', 'U0008');
INSERT INTO `tracking` VALUES (491, 'T201807060005', '2018-07-06 14:38:55', NULL, NULL, NULL, NULL, 'Created Ticket', 'TIKET DI BUAT', 'U0008');
INSERT INTO `tracking` VALUES (492, 'T201807060006', '2018-07-06 14:41:25', NULL, NULL, NULL, NULL, 'Created Ticket', 'TIKET DI BUAT', 'U0008');
INSERT INTO `tracking` VALUES (493, 'T201807060007', '2018-07-06 14:43:23', NULL, NULL, NULL, NULL, 'Created Ticket', 'TIKET DI BUAT', 'U0008');
INSERT INTO `tracking` VALUES (494, 'T201807090008', '2018-07-09 09:04:15', NULL, NULL, NULL, NULL, 'Created Ticket', 'TIKET DI BUAT', 'U0006');
INSERT INTO `tracking` VALUES (495, 'T201807060005', '2018-07-09 09:30:16', NULL, NULL, NULL, NULL, 'Ticket disetujui', 'TICKET DITERIMA VENDOR SUPPORT', 'U0011');
INSERT INTO `tracking` VALUES (496, 'T201807060005', '2018-07-09 09:34:23', NULL, NULL, NULL, NULL, 'Up Progress To 0 %', 'PAK HERI,\n\nUNTUK KASUS INI SERPERTI YANG SUDAH DI BAHAS, AKAN DI KENAKAN CHARGE.\nHAL INI AKAN DIKENAKAN 3 MAINDAYS. HAL INI KARENA PERUBAHAN KONSEP DARI YANG SUDAH BERJALAN. PERUBAHANNYA MENCAKUP FORM DAN JUGA STORE PROCEDURE POSTING PENALTY.\n\nTHANKS\nHOTNIEL SILAEN', 'U0011');
INSERT INTO `tracking` VALUES (497, 'T201805280002', '2018-07-09 09:45:32', NULL, NULL, NULL, NULL, 'Ticket tidak disetujui', '', 'U0011');
INSERT INTO `tracking` VALUES (499, 'T201807060006', '2018-07-09 09:46:41', NULL, NULL, NULL, NULL, 'Ticket disetujui', 'TICKET DITERIMA VENDOR SUPPORT', 'U0011');
INSERT INTO `tracking` VALUES (500, 'T201807060006', '2018-07-09 09:49:32', NULL, NULL, NULL, NULL, 'Up Progress To 0 %', 'PAK HERI,\n\nUNTUK PRINT ALL AJB INI KEMUNGKINAN AKAN MENYEBABKAN SYSTEM JADI LAMBAT. HAL INI KARENA SEMUA DATA AJB AKAN DI PRINT SEKALIGUS. SEMAKIN BANYAK DATA AJB YANG DI INPUT MAKA SEMAKIN LAMA PROSES LOADING NYA.\nADA KEMUNGKINAN JUGA, HAL INI AKAN MENGGANGGU PROSES TRANSAKSI LAIN YANG DILAKUKAN BERSAMAAN ATAU SETELAH PROSES PRINT INI DILAKUKAN\n\nAPAKAH TIDAK MASALAH JIKA PROSES NYA LAMA?\n\nTHANKS\nHOTNIEL SILAEN', 'U0011');
INSERT INTO `tracking` VALUES (501, 'T201807090009', '2018-07-09 13:50:07', NULL, NULL, NULL, NULL, 'Created Ticket', 'TIKET DI BUAT', 'U0006');
INSERT INTO `tracking` VALUES (502, 'T201807090009', '2018-07-09 13:56:33', NULL, NULL, NULL, NULL, 'Ticket disetujui', 'TICKET DITERIMA VENDOR SUPPORT', 'U0011');
INSERT INTO `tracking` VALUES (503, 'T201807090010', '2018-07-09 14:03:22', NULL, NULL, NULL, NULL, 'Created Ticket', 'TIKET DI BUAT', 'U0008');
INSERT INTO `tracking` VALUES (511, 'T201807090010', '2018-07-09 14:31:47', NULL, NULL, NULL, NULL, 'Ticket disetujui', 'TICKET DITERIMA VENDOR SUPPORT', 'U0011');
INSERT INTO `tracking` VALUES (513, 'T201807090009', '2018-07-09 14:35:57', NULL, NULL, NULL, NULL, 'Up Progress To 0 %', '', 'U0011');
INSERT INTO `tracking` VALUES (514, 'T201807090009', '2018-07-09 14:40:06', NULL, NULL, NULL, NULL, 'Up Progress To 100 %', 'MOHON DIUPDATE KE SERVER, UNTUK DATA YANG LAMA CARA IMPORT TIDAK BISA LANGSUNG, JADI SAYA BUATKAN SCRIPT UNTUK INSERT DATA DARI DATABASE LAMA NYA. RSTORE DATABASE TANGGAL 28 MEI 2018, DENGAN NAMA PMS_STANDARD_0528, LALU JALANKAN SCRIPT \"INSERT DATA\" YANG TERLAMPIR DI ATTACHMENT UNTUK INSERT DATA LAMA KE DATABASE PMS_STANDARD', 'U0011');
INSERT INTO `tracking` VALUES (526, 'T201807090009', '2018-07-10 09:07:25', NULL, NULL, NULL, NULL, 'Unsolved', 'unsolved', 'U0006');
INSERT INTO `tracking` VALUES (527, 'T201807090009', '2018-07-10 09:16:37', NULL, NULL, NULL, NULL, 'Diproses oleh vendor support', '', 'U0011');
INSERT INTO `tracking` VALUES (528, 'T201807090009', '2018-07-10 09:18:05', NULL, NULL, NULL, NULL, 'Up Progress To 0 %', 'NOTE REFER TO LAST INFORMATION ON THIS TICKET', 'U0011');
INSERT INTO `tracking` VALUES (529, 'T201807090009', '2018-07-10 09:18:28', NULL, NULL, NULL, NULL, 'Up Progress To 100 %', '', 'U0011');
INSERT INTO `tracking` VALUES (533, 'T201807110011', '2018-07-11 09:42:48', NULL, NULL, NULL, NULL, 'Created Ticket', 'TIKET DI BUAT', 'U0007');
INSERT INTO `tracking` VALUES (534, 'T201807110012', '2018-07-11 10:25:56', NULL, NULL, NULL, NULL, 'Created Ticket', 'TIKET DI BUAT', 'U0009');
INSERT INTO `tracking` VALUES (535, 'T201807060004', '2018-07-11 10:48:53', NULL, NULL, NULL, NULL, 'Ticket disetujui', 'TICKET DITERIMA VENDOR SUPPORT', 'U0011');
INSERT INTO `tracking` VALUES (536, 'T201807090008', '2018-07-11 10:49:18', NULL, NULL, NULL, NULL, 'Ticket disetujui', 'TICKET DITERIMA VENDOR SUPPORT', 'U0011');
INSERT INTO `tracking` VALUES (537, 'T201807110011', '2018-07-11 10:56:07', NULL, NULL, NULL, NULL, 'Ticket disetujui', 'TICKET DITERIMA VENDOR SUPPORT', 'U0011');
INSERT INTO `tracking` VALUES (538, 'T201807110011', '2018-07-11 10:57:34', NULL, NULL, NULL, NULL, 'Up Progress To 100 %', 'DEAR BU ESTER,\n\nTERLAMPIR UPDATE UNTUK PERMASALAHAN INI.\n\nTHANKS\nHOTNIEL SILAEN', 'U0011');
INSERT INTO `tracking` VALUES (539, 'T201805300003', '2018-07-11 11:24:43', NULL, NULL, NULL, NULL, 'Up Progress To 100 %', '', 'U0011');
INSERT INTO `tracking` VALUES (540, 'T201807060004', '2018-07-11 11:53:25', NULL, NULL, NULL, NULL, 'Up Progress To 100 %', 'PAK HERI,\n\nTERLAMPIR UPDATE UNTUK KASUS PENGALIHAN HAK OWNERSHIP.\n\nTHANKS\nHOTNIEL SILAEN', 'U0011');
INSERT INTO `tracking` VALUES (541, 'T201807110013', '2018-07-11 17:05:30', NULL, NULL, NULL, NULL, 'Created Ticket', 'TIKET DI BUAT', 'U0008');
INSERT INTO `tracking` VALUES (542, 'T201807160014', '2018-07-16 17:24:00', NULL, NULL, NULL, NULL, 'Created Ticket', 'TIKET DI BUAT', 'U0009');
INSERT INTO `tracking` VALUES (543, 'T201807160014', '2018-07-17 16:29:03', NULL, NULL, NULL, NULL, 'Ticket disetujui', 'TICKET DITERIMA VENDOR SUPPORT', 'U0011');
INSERT INTO `tracking` VALUES (544, 'T201807060004', '2018-07-18 09:36:40', NULL, NULL, NULL, NULL, 'Unsolved', 'Mohon di betulkan kembali sesuai pembicaraan lewat telp dengan bu ester', 'U0008');
INSERT INTO `tracking` VALUES (545, 'T201807180015', '2018-07-18 10:37:26', NULL, NULL, NULL, NULL, 'Created Ticket', 'TIKET DI BUAT', 'U0009');
INSERT INTO `tracking` VALUES (546, 'T201807180016', '2018-07-18 17:28:07', NULL, NULL, NULL, NULL, 'Created Ticket', 'TIKET DI BUAT', 'U0008');
INSERT INTO `tracking` VALUES (547, 'T201807180016', '2018-07-19 11:30:14', NULL, NULL, NULL, NULL, 'Ticket disetujui', 'TICKET DITERIMA VENDOR SUPPORT', 'U0011');
INSERT INTO `tracking` VALUES (548, 'T201807180016', '2018-07-19 11:35:41', NULL, NULL, NULL, NULL, 'Up Progress To 0 %', 'PAK HERI, KALAU SAYA LIHAT DARI DATA INVOICE NYA.\nUNTUK PAJAK NYA ADALAH INCLUSIVE, SEHINGGA NILAI  PADA SAAT ALOKASI NILAI MAX ALOKASINYA ITU ADALAH NILAI SETELAH DI KURANGI DENGAN NILAI PAJAK.  \nTHANKS', 'U0011');
INSERT INTO `tracking` VALUES (549, 'T201807180016', '2018-07-19 11:35:48', NULL, NULL, NULL, NULL, 'Up Progress To 100 %', 'PAK HERI, KALAU SAYA LIHAT DARI DATA INVOICE NYA.\nUNTUK PAJAK NYA ADALAH INCLUSIVE, SEHINGGA NILAI  PADA SAAT ALOKASI NILAI MAX ALOKASINYA ITU ADALAH NILAI SETELAH DI KURANGI DENGAN NILAI PAJAK.  \nTHANKS', 'U0011');
INSERT INTO `tracking` VALUES (550, 'T201807180015', '2018-07-19 11:36:36', NULL, NULL, NULL, NULL, 'Ticket disetujui', 'TICKET DITERIMA VENDOR SUPPORT', 'U0011');
INSERT INTO `tracking` VALUES (551, 'T201807180016', '2018-07-19 13:38:49', NULL, NULL, NULL, NULL, 'Unsolved', 'iya pak hotniel inclusive, klo yang di masukin harga ny yg sebelum pajak bukan ny  exclusive pak?', 'U0008');
INSERT INTO `tracking` VALUES (554, 'T201807160014', '2018-07-20 17:04:21', NULL, NULL, NULL, NULL, 'Up Progress To 100 %', 'PAK RANGGAUNG,\n\nUNTUK PERMASALAHAN INI SUDAH SAYA PERBAIKI.\nPERBAIKAN DILAKUKAN PADA LEVEL FORM.\nBERIKUT LINK UNTUK UPDATEAN NYA.\nHTTPS://DRIVE.GOOGLE.COM/OPEN?ID=1OFCQAS36AJSAEELQKCZCENG5LIDSUZ_K\n\nTHANKS\nHOTNIEL SILAEN', 'U0011');
INSERT INTO `tracking` VALUES (555, 'T201807180015', '2018-07-23 09:29:33', NULL, NULL, NULL, NULL, 'Up Progress To 0 %', 'Pak Ranggaung,\n\nUntuk error ini saya sudah coba via graphon dan tidak ada masalah. \nMohon di cek kembali.\n\nThanks\nHotniel Silaen', 'U0011');
INSERT INTO `tracking` VALUES (556, 'T201807180016', '2018-07-23 15:26:13', NULL, NULL, NULL, NULL, 'Diproses oleh vendor support', '', 'U0011');
INSERT INTO `tracking` VALUES (557, 'T201807180016', '2018-07-23 15:27:13', NULL, NULL, NULL, NULL, 'Up Progress To 100 %', 'Pak Heri,\n\nTerlampir link untuk file update terkait permasalahan di atas.\nhttps://drive.google.com/open?id=161S-hK6e20PNRr3vWwrXkDXjm5XMgZIa\n\nThanks\nHotniel Silaen', 'U0011');
INSERT INTO `tracking` VALUES (558, 'T201807060004', '2018-07-23 15:27:52', NULL, NULL, NULL, NULL, 'Diproses oleh vendor support', '', 'U0011');
INSERT INTO `tracking` VALUES (559, 'T201807060004', '2018-07-23 15:28:17', NULL, NULL, NULL, NULL, 'Up Progress To 100 %', 'Untuk permasalahan ini sudah di kirimkan kembali perbaikannya.', 'U0011');
INSERT INTO `tracking` VALUES (560, 'T201807180015', '2018-07-23 15:29:39', NULL, NULL, NULL, NULL, 'Up Progress To 100 %', 'Setelah di cek via graphon, tidak di temukan masalah terkait hal ini.\nMohon di cek kembali, kemungkinan kendala nya muncul karena jaringan internet putus untuk project GSM nya.', 'U0011');
INSERT INTO `tracking` VALUES (561, 'T201805280002', '2018-07-24 10:47:41', NULL, NULL, NULL, NULL, 'Ticket dikembalikan ke posisi belum di setujui', '', 'U0011');
INSERT INTO `tracking` VALUES (562, 'T201805280002', '2018-07-24 10:47:45', NULL, NULL, NULL, NULL, 'Ticket tidak disetujui', '', 'U0011');
INSERT INTO `tracking` VALUES (563, 'T201807160014', '2018-07-25 10:30:49', NULL, NULL, NULL, NULL, 'Unsolved', 'Saya cek untuk form ini masih belum bisa, terutam untuk invoice bulan juli.', 'U0009');
INSERT INTO `tracking` VALUES (564, 'T201807090010', '2018-07-25 10:41:08', NULL, NULL, NULL, NULL, 'Up Progress To 100 %', 'Pak Heri silahkan diupdate.', 'U0011');
INSERT INTO `tracking` VALUES (565, 'T201807090010', '2018-07-25 11:05:52', NULL, NULL, NULL, NULL, 'Unsolved', 'pak yulianto/pak hotniel, tolong di upload dengan file zip, atau bisa di email, karena file rar tidak kebaca di app ticket, terima kasih', 'U0008');
INSERT INTO `tracking` VALUES (566, 'T201807250017', '2018-07-25 11:37:37', NULL, NULL, NULL, NULL, 'Created Ticket', 'TIKET DI BUAT', 'U0009');
INSERT INTO `tracking` VALUES (584, 'T201807250017', '2018-07-26 08:57:23', NULL, NULL, NULL, NULL, 'Ticket disetujui', 'TICKET DITERIMA VENDOR SUPPORT', 'U0011');
INSERT INTO `tracking` VALUES (585, 'T201807250017', '2018-07-26 08:58:11', NULL, NULL, NULL, NULL, 'Up Progress To 100 %', 'Pak Ranggaung,\n\nTerlampir update untuk permasalahan ini.\n\nThanks\nHotniel Silaen', 'U0011');
INSERT INTO `tracking` VALUES (590, 'T201807270018', '2018-07-27 11:13:53', NULL, NULL, NULL, NULL, 'Created Ticket', 'TIKET DI BUAT', 'U0006');
INSERT INTO `tracking` VALUES (597, 'T201807310019', '2018-07-31 14:35:01', NULL, NULL, NULL, NULL, 'Created Ticket', 'TIKET DI BUAT', 'U0006');
INSERT INTO `tracking` VALUES (626, 'T201807090010', '2018-08-02 14:43:50', NULL, NULL, NULL, NULL, 'Diproses oleh vendor support', '', 'U0011');
INSERT INTO `tracking` VALUES (627, 'T201808020020', '2018-08-02 14:48:16', NULL, NULL, NULL, NULL, 'Created Ticket', 'TIKET DI BUAT', 'U0007');
INSERT INTO `tracking` VALUES (628, 'T201807090010', '2018-08-02 14:53:33', NULL, NULL, NULL, NULL, 'Up Progress To 100 %', 'Dear Pak Heri,\n\nTerlampir untuk update file nya dengan sudah saya ubah ke zip.\nSilahkan diupdatekan ke server.', 'U0011');
INSERT INTO `tracking` VALUES (629, 'T201808020020', '2018-08-02 14:54:20', NULL, NULL, NULL, NULL, 'Ticket disetujui', 'TICKET DITERIMA VENDOR SUPPORT', 'U0011');
INSERT INTO `tracking` VALUES (630, 'T201808020020', '2018-08-02 14:55:51', NULL, NULL, NULL, NULL, 'Up Progress To 0 %', 'Dear bu Ester,\n\nTerlampir untuk update form PL Activity yang tidak bisa save record lebih dari 1.\nSilahkan diupdate ke server.', 'U0011');
INSERT INTO `tracking` VALUES (635, 'T201807090010', '2018-08-02 16:34:09', NULL, NULL, NULL, NULL, 'Unsolved', 'Tolong di upload ulang pak yulianto, terima kasih', 'U0008');
INSERT INTO `tracking` VALUES (636, 'T201808020020', '2018-08-02 16:41:07', NULL, NULL, NULL, NULL, 'Up Progress To 100 %', 'Dear bu Ester, coba dengan file ini, bisa di download tidak?', 'U0011');
INSERT INTO `tracking` VALUES (637, 'T201807090010', '2018-08-02 16:41:49', NULL, NULL, NULL, NULL, 'Diproses oleh vendor support', '', 'U0011');
INSERT INTO `tracking` VALUES (638, 'T201807090010', '2018-08-02 16:42:52', NULL, NULL, NULL, NULL, 'Up Progress To 100 %', 'Dear Pak Heri,\n\nCoba lagi ya pak, sudah saya upload ulang.', 'U0011');
INSERT INTO `tracking` VALUES (646, 'T201808030021', '2018-08-03 09:03:41', NULL, NULL, NULL, NULL, 'Created Ticket', 'TIKET DI BUAT', 'U0006');
INSERT INTO `tracking` VALUES (671, 'T201807310019', '2018-08-08 11:02:48', NULL, NULL, NULL, NULL, 'Ticket disetujui', 'TICKET DITERIMA VENDOR SUPPORT', 'U0011');
INSERT INTO `tracking` VALUES (673, 'T201807060007', '2018-08-08 11:03:12', NULL, NULL, NULL, NULL, 'Ticket disetujui', 'TICKET DITERIMA VENDOR SUPPORT', 'U0011');
INSERT INTO `tracking` VALUES (674, 'T201807110012', '2018-08-08 11:03:14', NULL, NULL, NULL, NULL, 'Ticket disetujui', 'TICKET DITERIMA VENDOR SUPPORT', 'U0011');
INSERT INTO `tracking` VALUES (675, 'T201807270018', '2018-08-08 11:03:26', NULL, NULL, NULL, NULL, 'Ticket disetujui', 'TICKET DITERIMA VENDOR SUPPORT', 'U0011');
INSERT INTO `tracking` VALUES (676, 'T201808030021', '2018-08-08 11:03:37', NULL, NULL, NULL, NULL, 'Ticket disetujui', 'TICKET DITERIMA VENDOR SUPPORT', 'U0011');
INSERT INTO `tracking` VALUES (679, 'T201807270018', '2018-08-08 14:16:51', NULL, NULL, NULL, NULL, 'Up Progress To 0 %', 'Bu Putri,\n\nUntuk case ini sedang di QC. Karena sebagian besar proses nya kita tune up.\nuntuk menghindari terjadinya lock proses.\nThanks\nhotniel', 'U0011');
INSERT INTO `tracking` VALUES (681, 'T201808030021', '2018-08-08 14:19:36', NULL, NULL, NULL, NULL, 'Up Progress To 100 %', 'pak Heri,\n\n\nberdasarkan meeting pada tgl 02 agustus 2018 untuk case ini sudah di jelaskan oleh pak wawan ke bu jinny. Dan hasilnya, proses ini tidak ada perubahan dan mengikuti konsep yang sudah ada sekarang dalam system ast.\n\nHotniel', 'U0011');
INSERT INTO `tracking` VALUES (682, 'T201807310019', '2018-08-08 14:21:29', NULL, NULL, NULL, NULL, 'Up Progress To 100 %', 'Dear Putri,\n\nuntuk kasus ini sudah di update via email tgl 01 agustus 2018.\n\nThanks\nHotniel', 'U0011');
INSERT INTO `tracking` VALUES (683, 'T201807110013', '2018-08-08 14:22:25', NULL, NULL, NULL, NULL, 'Ticket disetujui', 'TICKET DITERIMA VENDOR SUPPORT', 'U0011');
INSERT INTO `tracking` VALUES (684, 'T201807110013', '2018-08-08 14:23:20', NULL, NULL, NULL, NULL, 'Up Progress To 100 %', 'Pak heri,\n\nuntuk hal ini sudah di jelaskan oleh pak yulianto pada saat meeting tgl 02 agustus 2018.\nPenyebabnya ada format pada template di ubah oleh user.\n\nThanks\nhotniel Silaen', 'U0011');
INSERT INTO `tracking` VALUES (685, 'T201807110012', '2018-08-08 14:25:39', NULL, NULL, NULL, NULL, 'Up Progress To 0 %', 'Dear Pak Ranggaung,\n\nSetelah saya melakukan QC untuk case ini. saya tidak menemukan masalah terkait OR auto.\nKonsepnya yang sekarang adalah jika masih ada invoice yang outstanding untuk debtor tersebut, maka pada saat download akan otomatis mengalokasikan nilai yang masih outstanding tersebut First In First Out (FIFO).\nMohon agar di cek kembali.\n\nThanks\nhotniel silaen', 'U0011');
INSERT INTO `tracking` VALUES (686, 'T201807090008', '2018-08-08 14:26:39', NULL, NULL, NULL, NULL, 'Up Progress To 100 %', 'Dear Putri,\n\nUntuk case ini sudah di perbaiki dan sudah solve.\n\nThanks\nHotniel Silaen', 'U0011');
INSERT INTO `tracking` VALUES (687, 'T201807060005', '2018-08-08 14:28:48', NULL, NULL, NULL, NULL, 'Up Progress To 100 %', 'Dear Pak Heri,\n\nUntuk case ini sudah di bahas pada tgl 02 agustus 2018.\nDan proses ini akan tetap dengan konsep yang sekarang.\n\nThanks\nHotniel', 'U0011');
INSERT INTO `tracking` VALUES (689, 'T201807060007', '2018-08-08 14:41:28', NULL, NULL, NULL, NULL, 'Up Progress To 0 %', 'Heri\n\nuntuk hal ini sedang dilakukan pengecekan.\n\nthanks\nHotniel Silaen', 'U0011');
INSERT INTO `tracking` VALUES (690, 'T201807090008', '2018-08-08 14:48:24', NULL, NULL, NULL, NULL, 'Unsolved', 'untuk tgl 1agustus tidak ada update untuk kasus ini, yg ada hanya untuk insert standing chargers ownership saja.', 'U0006');
INSERT INTO `tracking` VALUES (691, 'T201807090008', '2018-08-08 15:15:31', NULL, NULL, NULL, NULL, 'Diproses oleh vendor support', '', 'U0011');
INSERT INTO `tracking` VALUES (692, 'T201807090008', '2018-08-08 15:17:32', NULL, NULL, NULL, NULL, 'Up Progress To 100 %', 'Dear Bu Putri,\n\nUntuk case ini sudah di lakukan update pada tgl 20 Juli 2018.\n\nThanks\nhotniel Silaen', 'U0011');
INSERT INTO `tracking` VALUES (693, 'T201807160014', '2018-08-08 15:30:14', NULL, NULL, NULL, NULL, 'Diproses oleh vendor support', '', 'U0011');
INSERT INTO `tracking` VALUES (694, 'T201807090008', '2018-08-08 15:38:01', NULL, NULL, NULL, NULL, 'Unsolved', 'dear Hotniel,\ntolong di kirim ulang update untuk kasus ini. karena untuk tgl 20 saya hanya menerima update untuk ownership management yg tidak dapat melakukan proses untuk membuat invoice. terimakasih.', 'U0006');
INSERT INTO `tracking` VALUES (695, 'T201807090008', '2018-08-08 15:59:44', NULL, NULL, NULL, NULL, 'Diproses oleh vendor support', '', 'U0011');
INSERT INTO `tracking` VALUES (696, 'T201807090008', '2018-08-08 16:01:24', NULL, NULL, NULL, NULL, 'Up Progress To 100 %', 'Dear Bu Putri,\n\nMohon maaf bu, saya lupa.\nDi lokal saya saya sudah benerin, karena udah lewat hari saya ingat nya sudah kirim juga.\nTerlampir update untuk case ini.\n\nThanks\nHotniel Silaen', 'U0011');
INSERT INTO `tracking` VALUES (697, 'T201808090022', '2018-08-09 08:34:52', NULL, NULL, NULL, NULL, 'Created Ticket', 'TIKET DI BUAT', 'U0008');
INSERT INTO `tracking` VALUES (698, 'T201807250017', '2018-08-09 08:41:05', NULL, NULL, NULL, NULL, 'Unsolved', 'Masih belum benar', 'U0009');
INSERT INTO `tracking` VALUES (720, 'T201807250017', '2018-08-10 08:53:33', NULL, NULL, NULL, NULL, 'Diproses oleh vendor support', '', 'U0011');
INSERT INTO `tracking` VALUES (722, 'T201807250017', '2018-08-10 09:14:16', NULL, NULL, NULL, NULL, 'Up Progress To 100 %', 'Pak ranggaung,\n\nuntuk case ini, apakah lapiran saya sudah di update?\nkarena jika melihat date modify antara lokal saya dengan code yang saya terima per 01 agustus 2018 masih belum sama.\nMohon di cek kembali.\n\nThanks\nHotniel Silaen', 'U0011');
INSERT INTO `tracking` VALUES (723, 'T201808090022', '2018-08-10 09:29:24', NULL, NULL, NULL, NULL, 'Ticket disetujui', 'TICKET DITERIMA VENDOR SUPPORT', 'U0011');
INSERT INTO `tracking` VALUES (724, 'T201807110012', '2018-08-10 09:30:06', NULL, NULL, NULL, NULL, 'Up Progress To 100 %', '', 'U0011');
INSERT INTO `tracking` VALUES (725, 'T201807160014', '2018-08-10 09:36:47', NULL, NULL, NULL, NULL, 'Up Progress To 100 %', 'Pak Ranggaung,\n\nUntuk case ini, tidak terbentuk billing karena booking date nya kosong.\nPada rabu kemarin, saya sudah langsung coba di live, \ndan sudah cek ke database nya juga. Setelah booking date nya saya isi, kemudian pada tab other charge saya edit > save. Billing nya sudah terbentuk.\n\nThanks\nHotniel', 'U0011');
INSERT INTO `tracking` VALUES (726, 'T201807060006', '2018-08-10 09:37:54', NULL, NULL, NULL, NULL, 'Up Progress To 100 %', '', 'U0011');
INSERT INTO `tracking` VALUES (727, 'T201808100023', '2018-08-10 10:34:45', NULL, NULL, NULL, NULL, 'Created Ticket', 'TIKET DI BUAT', 'U0008');
INSERT INTO `tracking` VALUES (728, 'T201808100023', '2018-08-10 13:32:06', NULL, NULL, NULL, NULL, 'Ticket disetujui', 'TICKET DITERIMA VENDOR SUPPORT', 'U0014');
INSERT INTO `tracking` VALUES (729, 'T201808100023', '2018-08-10 13:32:49', NULL, NULL, NULL, NULL, 'Up Progress To 0 %', 'Dear Pak Heri,\n\nUntuk form nya akan saya cek dan perbaiki, segera diinformasikan kembali hasil perbaikannya.', 'U0014');
INSERT INTO `tracking` VALUES (741, 'T201805280002', '2018-08-10 16:35:12', NULL, NULL, NULL, NULL, 'Ticket dikembalikan ke posisi belum di setujui', '', 'U0016');
INSERT INTO `tracking` VALUES (742, 'T201805280002', '2018-08-10 16:35:25', NULL, NULL, NULL, NULL, 'Ticket tidak disetujui', '', 'U0016');
INSERT INTO `tracking` VALUES (753, 'T201807270018', '2018-08-13 09:03:12', NULL, NULL, NULL, NULL, 'Up Progress To 100 %', 'Dear Putri,\n\nTerlampir update untuk perbaikan user log.\nSekaligus tune up report.\n\nThanks\nHotniel Silaen', 'U0011');
INSERT INTO `tracking` VALUES (755, 'T201805280002', '2018-08-13 09:08:36', NULL, NULL, NULL, NULL, 'Ticket dikembalikan ke posisi belum di setujui', '', 'U0011');
INSERT INTO `tracking` VALUES (757, 'T201805280002', '2018-08-13 09:08:48', NULL, NULL, NULL, NULL, 'Ticket tidak disetujui', '', 'U0011');
INSERT INTO `tracking` VALUES (761, 'T201807060007', '2018-08-13 09:20:33', NULL, NULL, NULL, NULL, 'Up Progress To 100 %', 'Dear Heri,\n\nTerlampir update untuk permasalahan ini.\nUpdate : pada saat buat booking entry baru setelah proses cancelation, debtor baru akan otomati mereplace debtor sebelum nya. Dan no VA untuk saat ini sudah ada di master unit.\n\nThanks\nHotniel Silaen', 'U0011');
INSERT INTO `tracking` VALUES (763, 'T201807060007', '2018-08-13 09:34:07', NULL, NULL, NULL, NULL, 'Unsolved', 'Dear team ast mohon untuk upload file dengan file rar atau zip, karena file tersebut tidak bisa di download, terima kasih\n\nFYI\nada email ke email support ast dari admin ticketing tgl 08/08/2018 melampirkan info update module applikasi ticketing   ', 'U0008');
INSERT INTO `tracking` VALUES (789, 'T201808140024', '2018-08-14 10:31:06', NULL, NULL, NULL, NULL, 'Created Ticket', 'TIKET DI BUAT', 'U0006');
INSERT INTO `tracking` VALUES (790, 'T201808140024', '2018-08-14 10:58:57', NULL, NULL, NULL, NULL, 'Ticket disetujui', 'TICKET DITERIMA VENDOR SUPPORT', 'U0014');
INSERT INTO `tracking` VALUES (791, 'T201808140024', '2018-08-14 10:59:38', NULL, NULL, NULL, NULL, 'Up Progress To 0 %', 'Dear Bu Putri,\n\nUntuk kendala ini akan kami cek dahulu, segara akan kami infokan update nya.\n\nTerima kasih\n-Yulianto', 'U0014');
INSERT INTO `tracking` VALUES (792, 'T201807110012', '2018-08-14 14:56:35', NULL, NULL, NULL, NULL, 'Unsolved', 'Untuk form OR auto via (VA), invoice bulan berjalan tidak akan muncul jika masih ada outstanding. Jika unit tersebut disewakan ke orang lain dan penyewanya hanya mau bayar ipl bulan berjalan, bagaimana? ', 'U0009');
INSERT INTO `tracking` VALUES (793, 'T201808150025', '2018-08-15 11:12:56', NULL, NULL, NULL, NULL, 'Created Ticket', 'TIKET DI BUAT', 'U0008');
INSERT INTO `tracking` VALUES (794, 'T201808150025', '2018-08-15 11:18:58', NULL, NULL, NULL, NULL, 'Ticket disetujui', 'TICKET DITERIMA VENDOR SUPPORT', 'U0011');
INSERT INTO `tracking` VALUES (795, 'T201808150025', '2018-08-15 11:19:53', NULL, NULL, NULL, NULL, 'Up Progress To 0 %', 'Pak Heri,\n\nUntuk case ini akan kami cek kembali untuk validasi nya, sehingga hal yang sama tidak terulang kembali.\n\nThanks\nHotniel Silaen', 'U0011');
INSERT INTO `tracking` VALUES (796, 'T201807060007', '2018-08-15 11:25:36', NULL, NULL, NULL, NULL, 'Diproses oleh vendor support', '', 'U0011');
INSERT INTO `tracking` VALUES (797, 'T201807060007', '2018-08-15 11:26:51', NULL, NULL, NULL, NULL, 'Up Progress To 100 %', 'Pak heri,\n\nTerlampir update untuk case ini.\n\nThanks\nHotniel Silaen', 'U0011');
INSERT INTO `tracking` VALUES (798, 'T201808140024', '2018-08-16 08:30:18', NULL, NULL, NULL, NULL, 'Up Progress To 100 %', 'Terlampir untuk update form AP Debit Note. Silahkan diupdatekan ke server ya bu.\n\nTerima kasih\n-Yulianto', 'U0014');
INSERT INTO `tracking` VALUES (799, 'T201808100023', '2018-08-21 10:22:16', NULL, NULL, NULL, NULL, 'Up Progress To 100 %', 'Dear Pak Heri,\n\nUntuk case ini sudah saya perbaiki ya pak, langsung saya update ke database nya untuk penambahan primary key nya. Saya sertakan juga script update nya.\n\nTerima kasih\n-Yulianto', 'U0014');
INSERT INTO `tracking` VALUES (807, 'T201808100023', '2018-08-21 14:43:54', NULL, NULL, NULL, NULL, 'Up Progress To 100 %', 're upload file update', 'U0014');
INSERT INTO `tracking` VALUES (813, 'T201807110012', '2018-08-23 08:55:47', NULL, NULL, NULL, NULL, 'Diproses oleh vendor support', '', 'U0011');
INSERT INTO `tracking` VALUES (814, 'T201807110012', '2018-08-23 09:00:01', NULL, NULL, NULL, NULL, 'Up Progress To 0 %', 'Pak Ranggaung,\n\nJika melihat dari konsep yang sudah berjalan sekarang, OR auto VA akan otomatis mengalikasikan invoice yang masih outstanding untuk debtor terkait.\nKalau konsep yang dari pak ranggaung berarti jika menggunakan OR auto VA maka invoice yang masih outstanding tidak muncul atau gimana ya pak?\nMohon penjelasannya.\nDan untuk debtor yang hanya akan melakukan pembayaran untuk invoice IPL di bulan berjalan sementara kodisinya di bulan sebelum nya masih ada invoice outstanding maka proses nya adalah dengan melakukan proses refresh data sehingga invoice IPL yang akan di alokasikan muncul pada list detailnya.\n\nThanks\nHotniel Silaen', 'U0011');
INSERT INTO `tracking` VALUES (815, 'T201808100023', '2018-08-23 11:18:08', NULL, NULL, NULL, NULL, 'Unsolved', 'Tolong di upload ulang, terima kasih\n', 'U0008');
INSERT INTO `tracking` VALUES (821, 'T201808100023', '2018-08-23 10:51:29', NULL, NULL, NULL, NULL, 'Diproses oleh vendor support', '', 'U0014');
INSERT INTO `tracking` VALUES (822, 'T201808100023', '2018-08-23 10:52:45', NULL, NULL, NULL, NULL, 'Up Progress To 100 %', 'Re Upload File', 'U0014');
INSERT INTO `tracking` VALUES (823, 'T201808150025', '2018-08-24 15:01:16', NULL, NULL, NULL, NULL, 'Up Progress To 100 %', 'Pak heri,\nuntuk kasus ini, terlampir update validasi proses pengajuan kredit nya.\nValidasi nya di buat pada form Approval Akad Kredit sebelum masuk ke proses KPR.\n\nThanks\nHotniel Silaen', 'U0011');
INSERT INTO `tracking` VALUES (824, 'T201808270026', '2018-08-27 09:43:46', NULL, NULL, NULL, NULL, 'Created Ticket', 'TIKET DI BUAT', 'U0006');
INSERT INTO `tracking` VALUES (825, 'T201808270026', '2018-08-27 09:49:08', NULL, NULL, NULL, NULL, 'Ticket disetujui', 'TICKET DITERIMA VENDOR SUPPORT', 'U0011');
INSERT INTO `tracking` VALUES (826, 'T201808270026', '2018-08-27 10:00:02', NULL, NULL, NULL, NULL, 'Up Progress To 0 %', 'Bu Putri,\n\nuntuk hal ini akan di cek kembali.\n\nThanks\nHotniel Silaen', 'U0011');
INSERT INTO `tracking` VALUES (827, 'T201808270027', '2018-08-27 10:47:33', NULL, NULL, NULL, NULL, 'Created Ticket', 'TIKET DI BUAT', 'U0007');
INSERT INTO `tracking` VALUES (828, 'T201808270027', '2018-08-27 10:58:57', NULL, NULL, NULL, NULL, 'Ticket disetujui', 'TICKET DITERIMA VENDOR SUPPORT', 'U0011');
INSERT INTO `tracking` VALUES (829, 'T201808270027', '2018-08-27 11:33:15', NULL, NULL, NULL, NULL, 'Up Progress To 100 %', 'Sudah Ok', 'U0011');
INSERT INTO `tracking` VALUES (830, 'T201808150025', '2018-08-27 18:19:55', NULL, NULL, NULL, NULL, 'Unsolved', 'Dear team AST, mohon dicari solusi lain untuk validasi SPR nominal 0 yang sekarang di taro di approval kredit , karena user tidak mau melakukan pembatalan KPR hanya karena kesalahan input dari divisi lain,\nTerima kasih', 'U0008');
INSERT INTO `tracking` VALUES (831, 'T201808150025', '2018-08-27 17:33:10', NULL, NULL, NULL, NULL, 'Diproses oleh vendor support', '', 'U0011');
INSERT INTO `tracking` VALUES (832, 'T201808150025', '2018-08-27 17:34:50', NULL, NULL, NULL, NULL, 'Up Progress To 100 %', 'pak heri,\n\nterlampir update untuk perbaikan case ini.\nvalidasi dibuat pada saat create pengajuan kredit.\njika nilai spr nya 0, maka akan muncul pop up (message box).\n\nThanks\nhotniel Silaen', 'U0011');
INSERT INTO `tracking` VALUES (833, 'T201808280028', '2018-08-28 16:16:59', NULL, NULL, NULL, NULL, 'Created Ticket', 'TIKET DI BUAT', 'U0006');
INSERT INTO `tracking` VALUES (834, 'T201808280028', '2018-08-28 16:25:09', NULL, NULL, NULL, NULL, 'Ticket disetujui', 'TICKET DITERIMA VENDOR SUPPORT', 'U0011');
INSERT INTO `tracking` VALUES (835, 'T201808280028', '2018-08-28 16:28:41', NULL, NULL, NULL, NULL, 'Up Progress To 100 %', 'Bu Putri,\n\nUntuk case ini sebenarnya hanya perbaikan prosedure input nya.\nAda validasi pada form ini, untuk standing charge jika booking date pada tab ownership entry nya kosong maka tidak bisa di tambah.\nSedangkan untuk informasi entry pada tab ownership entry itu adalah informasi untuk tab yang ownership entry nya. Yang artinya tenant itu belum ada proses booking nya.\n\nThanks\nhotniel silaen', 'U0011');
INSERT INTO `tracking` VALUES (836, 'T201808310029', '2018-08-31 15:12:47', NULL, NULL, NULL, NULL, 'Created Ticket', 'TIKET DI BUAT', 'U0008');
INSERT INTO `tracking` VALUES (837, 'T201809040030', '2018-09-04 09:10:14', NULL, NULL, NULL, NULL, 'Created Ticket', 'TIKET DI BUAT', 'U0008');
INSERT INTO `tracking` VALUES (838, 'T201809040030', '2018-09-04 11:09:47', NULL, NULL, NULL, NULL, 'Ticket disetujui', 'TICKET DITERIMA VENDOR SUPPORT', 'U0014');
INSERT INTO `tracking` VALUES (839, 'T201809040030', '2018-09-04 11:14:02', NULL, NULL, NULL, NULL, 'Up Progress To 100 %', 'Dear Pak Heri,\n\nPak ini tidak ada nilai totalnya karena kolom rounding nya harus diisi, saya capturekan (terlampir).', 'U0014');
INSERT INTO `tracking` VALUES (840, 'T201809060031', '2018-09-06 09:46:32', NULL, NULL, NULL, NULL, 'Created Ticket', 'TIKET DI BUAT', 'U0008');
INSERT INTO `tracking` VALUES (841, 'T201809060031', '2018-09-06 10:00:09', NULL, NULL, NULL, NULL, 'Ticket disetujui', 'TICKET DITERIMA VENDOR SUPPORT', 'U0014');
INSERT INTO `tracking` VALUES (842, 'T201809060031', '2018-09-07 09:24:29', NULL, NULL, NULL, NULL, 'Up Progress To 100 %', 'Terlampir untuk update rounding default menjadi 0.', 'U0014');
INSERT INTO `tracking` VALUES (843, 'T201809120032', '2018-09-12 12:04:30', NULL, NULL, NULL, NULL, 'Created Ticket', 'TIKET DI BUAT', 'U0006');
INSERT INTO `tracking` VALUES (844, 'T201809120032', '2018-09-14 08:51:55', NULL, NULL, NULL, NULL, 'Ticket disetujui', 'TICKET DITERIMA VENDOR SUPPORT', 'U0011');
INSERT INTO `tracking` VALUES (845, 'T201808310029', '2018-09-14 08:51:58', NULL, NULL, NULL, NULL, 'Ticket disetujui', 'TICKET DITERIMA VENDOR SUPPORT', 'U0011');
INSERT INTO `tracking` VALUES (846, 'T201808270026', '2018-09-14 08:53:08', NULL, NULL, NULL, NULL, 'Up Progress To 100 %', 'Dear Bu Putri,\n\nUntuk case ini sudah saya perbaiki langsung di server.\nHal ini karena ada data yang double.\n\nThanks\nHotniel Silaen', 'U0011');
INSERT INTO `tracking` VALUES (847, 'T201809120032', '2018-09-14 08:54:25', NULL, NULL, NULL, NULL, 'Up Progress To 0 %', 'Dear Bu Putri,\n\nUntuk hal ini akan kami cek terlebih dahulu.\n\nThanks', 'U0011');
INSERT INTO `tracking` VALUES (848, 'T201809140033', '2018-09-14 18:43:22', NULL, NULL, NULL, NULL, 'Created Ticket', 'TIKET DI BUAT', 'U0008');
INSERT INTO `tracking` VALUES (849, 'T201809140034', '2018-09-14 19:05:23', NULL, NULL, NULL, NULL, 'Created Ticket', 'TIKET DI BUAT', 'U0008');
INSERT INTO `tracking` VALUES (850, 'T201809140034', '2018-09-17 09:14:04', NULL, NULL, NULL, NULL, 'Ticket disetujui', 'TICKET DITERIMA VENDOR SUPPORT', 'U0011');
INSERT INTO `tracking` VALUES (851, 'T201809140034', '2018-09-17 13:07:28', NULL, NULL, NULL, NULL, 'Up Progress To 100 %', 'Dear Pak Heri,\n\nTerlampir update untuk case di bawah ini.\nProses nya, mohon agar nilai alokasi nya di refresh dengan cara mengalokasikan ulang nilai pada tab allocation nya.\n\nThanks\nHotniel Silaen', 'U0011');
INSERT INTO `tracking` VALUES (852, 'T201809140033', '2018-09-17 13:08:37', NULL, NULL, NULL, NULL, 'Ticket disetujui', 'TICKET DITERIMA VENDOR SUPPORT', 'U0011');
INSERT INTO `tracking` VALUES (853, 'T201809170035', '2018-09-17 16:54:53', NULL, NULL, NULL, NULL, 'Created Ticket', 'TIKET DI BUAT', 'U0008');
INSERT INTO `tracking` VALUES (854, 'T201809170035', '2018-09-17 16:57:53', NULL, NULL, NULL, NULL, 'Ticket disetujui', 'TICKET DITERIMA VENDOR SUPPORT', 'U0014');
INSERT INTO `tracking` VALUES (855, 'T201809170035', '2018-09-17 17:17:25', NULL, NULL, NULL, NULL, 'Up Progress To 0 %', 'Dear Pak Heri,\n\nBerikut penjelasan dari saya secara sistem.\n\n1. Sumber data AP Invoice berasal dari approval SPK Progress Invoice (jika Invoice nya Progress SPK), yang mana normal nya progress tersebut akan muncul invoice di form AP Invoice Entry. Namun hal ini dilakukan bypass secara sistem, sehingga ketika posting SPK Progress Invoice ini data tersebut otomatis terposting dari AP Invoice Entry nya dan langsung muncul di AP Payment nya ketika melakukan pembayaran atas creditor invoice tersebut.\n2. Jika Invoice tersebut dilakukan unpost (mungkin karena ada revisi) maka invoice tersebut akan kembali ke form AP Invoice Entry nya.\n3. Saya lampirkan track record nya untuk nomor invoice tersebut.', 'U0014');
INSERT INTO `tracking` VALUES (856, 'T201807110012', '2018-09-17 18:23:10', NULL, NULL, NULL, NULL, 'Feedback User ', '', 'U0009');
INSERT INTO `tracking` VALUES (857, 'T201807110012', '2018-09-18 08:43:59', NULL, NULL, NULL, NULL, 'Up Progress To 100 %', 'Sudah solve berdasarkan email dari pak ranggaung.\nThanks', 'U0011');
INSERT INTO `tracking` VALUES (858, 'T201809120032', '2018-09-18 09:55:30', NULL, NULL, NULL, NULL, 'Up Progress To 100 %', 'Dear Putri,\n\nTerlampir perbaikan untuk case ini.\nUntuk hasil perbaikannya sudah di konfirmasi via Whatsapp.\n\nThanks\nHotniel Silaen', 'U0011');
INSERT INTO `tracking` VALUES (859, 'T201808310029', '2018-09-18 10:23:38', NULL, NULL, NULL, NULL, 'Up Progress To 100 %', 'Pak Heri,\n\nTerlampir update untuk permasalahan ini.\n\nThanks\nHotniel Silaen', 'U0011');
INSERT INTO `tracking` VALUES (860, 'T201809170035', '2018-09-18 16:48:24', NULL, NULL, NULL, NULL, 'Feedback User ', 'Dear pak Yulianto, jadi invoice tersebut muncul karena proses unpost ya pak, ok terima kasih penjelasannya.', 'U0008');
INSERT INTO `tracking` VALUES (861, 'T201809170035', '2018-09-18 15:51:58', NULL, NULL, NULL, NULL, 'Up Progress To 100 %', 'Dear Pak Heri,\n\nBetul pak, jika invoice nya diunpost akan kembali ke form AP Invoice Entry nya.\nUntuk case ini solved ya pak dari yang saya informasikan.\n\nTerima Kasih\n-Yulianto', 'U0014');
INSERT INTO `tracking` VALUES (862, 'T201809140033', '2018-09-18 16:41:31', NULL, NULL, NULL, NULL, 'Up Progress To 100 %', 'Pak Heri,\n\nTerlampir update untuk case ini.\nmohon agar dilakukan revisi ulang untuk unit ini.\n\nThanks\nHotniel Silaen', 'U0011');
INSERT INTO `tracking` VALUES (863, 'T201808310029', '2018-09-18 17:51:02', NULL, NULL, NULL, NULL, 'Unsolved', 'Dear pak Hotniel, Mohon check email pak hotniel, karena update untuk cancelation masih error, terima kasih', 'U0008');
INSERT INTO `tracking` VALUES (864, 'T201808310029', '2018-09-19 09:59:15', NULL, NULL, NULL, NULL, 'Diproses oleh vendor support', '', 'U0011');
INSERT INTO `tracking` VALUES (865, 'T201809190036', '2018-09-19 10:07:16', NULL, NULL, NULL, NULL, 'Created Ticket', 'TIKET DI BUAT', 'U0006');
INSERT INTO `tracking` VALUES (866, 'T201809190036', '2018-09-19 10:44:42', NULL, NULL, NULL, NULL, 'Ticket disetujui', 'TICKET DITERIMA VENDOR SUPPORT', 'U0011');
INSERT INTO `tracking` VALUES (867, 'T201809190037', '2018-09-19 14:14:14', NULL, NULL, NULL, NULL, 'Created Ticket', 'TIKET DI BUAT', 'U0009');
INSERT INTO `tracking` VALUES (868, 'T201809190037', '2018-09-19 14:28:45', NULL, NULL, NULL, NULL, 'Ticket disetujui', 'TICKET DITERIMA VENDOR SUPPORT', 'U0011');
INSERT INTO `tracking` VALUES (870, 'T201809140033', '2018-09-20 10:44:51', NULL, NULL, NULL, NULL, 'Unsolved', 'Dear Pak Hotniel, mohon dibuatkan panduan untuk kasus refund OR ini, karena sy coba simulasi di lokal untuk revisi ulang, terjadi error, terima kasih', 'U0008');
INSERT INTO `tracking` VALUES (871, 'T201809140033', '2018-09-21 17:15:00', NULL, NULL, NULL, NULL, 'Diproses oleh vendor support', '', 'U0011');
INSERT INTO `tracking` VALUES (872, 'T201809140033', '2018-09-21 17:17:05', NULL, NULL, NULL, NULL, 'Up Progress To 100 %', 'Dear Pak heri,\n\nTerlampir update untuk case ini.\nMohon agar melakukan proses revisi ulang.\nSeperti yang sudah di Test bersama di PC pak heri.\n\nThanks\nHotniel Silaen', 'U0011');
INSERT INTO `tracking` VALUES (873, 'T201809240038', '2018-09-24 09:53:40', NULL, NULL, NULL, NULL, 'Created Ticket', 'TIKET DI BUAT', 'U0006');
INSERT INTO `tracking` VALUES (874, 'T201809240038', '2018-09-24 10:39:19', NULL, NULL, NULL, NULL, 'Ticket disetujui', 'TICKET DITERIMA VENDOR SUPPORT', 'U0014');
INSERT INTO `tracking` VALUES (875, 'T201809240038', '2018-09-24 10:42:10', NULL, NULL, NULL, NULL, 'Up Progress To 100 %', 'Dear Bu Putri,\n\nSudah saya perbaiki ya bu, silahkan bisa dicek kembali. saya lampirkan juga capture nya dan update nya.\n\nTerima Kasih\n-Yulianto', 'U0014');
INSERT INTO `tracking` VALUES (876, 'T201809260039', '2018-09-26 14:26:08', NULL, NULL, NULL, NULL, 'Created Ticket', 'TIKET DI BUAT', 'U0008');
INSERT INTO `tracking` VALUES (877, 'T201809270040', '2018-09-27 14:28:01', NULL, NULL, NULL, NULL, 'Created Ticket', 'TIKET DI BUAT', 'U0006');
INSERT INTO `tracking` VALUES (878, 'T201809280041', '2018-09-28 09:06:58', NULL, NULL, NULL, NULL, 'Created Ticket', 'TIKET DI BUAT', 'U0008');
INSERT INTO `tracking` VALUES (879, 'T201809260039', '2018-09-28 09:22:23', NULL, NULL, NULL, NULL, 'Ticket disetujui', 'TICKET DITERIMA VENDOR SUPPORT', 'U0014');
INSERT INTO `tracking` VALUES (880, 'T201809280042', '2018-09-28 10:13:58', NULL, NULL, NULL, NULL, 'Created Ticket', 'TIKET DI BUAT', 'U0009');
INSERT INTO `tracking` VALUES (882, 'T201809280042', '2018-09-28 11:33:52', NULL, NULL, NULL, NULL, 'Ticket disetujui', 'TICKET DITERIMA VENDOR SUPPORT', 'U0011');
INSERT INTO `tracking` VALUES (883, 'T201809280041', '2018-09-28 11:35:12', NULL, NULL, NULL, NULL, 'Ticket disetujui', 'TICKET DITERIMA VENDOR SUPPORT', 'U0011');
INSERT INTO `tracking` VALUES (884, 'T201809270040', '2018-09-28 11:35:25', NULL, NULL, NULL, NULL, 'Ticket disetujui', 'TICKET DITERIMA VENDOR SUPPORT', 'U0011');
INSERT INTO `tracking` VALUES (885, 'T201809270040', '2018-09-28 11:38:56', NULL, NULL, NULL, NULL, 'Up Progress To 100 %', 'Dear Pak Ranggaung,\n\nSaya sudah cek untuk masalah print kwitansi ini.\nSetelah saya coba via graphon, tidak ada masalah untuk proses print nya.\nMohon di coba kembali.\n\nThanks\nHotniel Silaen', 'U0011');
INSERT INTO `tracking` VALUES (886, 'T201809280041', '2018-09-28 11:41:25', NULL, NULL, NULL, NULL, 'Up Progress To 100 %', 'Dear Pak Heri,\n\nSetelah saya cek, ada perbedaan pph flag dari OR yang sekarang dengan OR yang sudah di proses.\nTerlampir capture OR berbeda pph flag.\nCatatan : Centang PPh Flag = 0 (di database)\nTidak Centang = 1 (di database)\n\nThanks\nHotniel Silaen', 'U0011');
INSERT INTO `tracking` VALUES (887, 'T201809280042', '2018-09-28 11:42:14', NULL, NULL, NULL, NULL, 'Up Progress To 0 %', 'Dear Pak Ranggaung,\n\nUntuk hal ini akan saya cek terlebih dahulu pak.\n\nThanks\nHotniel Silaen', 'U0011');
INSERT INTO `tracking` VALUES (893, 'T201810010043', '2018-10-01 09:29:32', NULL, NULL, NULL, NULL, 'Created Ticket', 'TIKET DI BUAT', 'U0006');
INSERT INTO `tracking` VALUES (894, 'T201810010044', '2018-10-01 09:56:38', NULL, NULL, NULL, NULL, 'Created Ticket', 'TIKET DI BUAT', 'U0006');
INSERT INTO `tracking` VALUES (895, 'T201810010045', '2018-10-01 10:00:32', NULL, NULL, NULL, NULL, 'Created Ticket', 'TIKET DI BUAT', 'U0006');
INSERT INTO `tracking` VALUES (896, 'T201810010044', '2018-10-01 10:01:51', NULL, NULL, NULL, NULL, 'Ticket disetujui', 'TICKET DITERIMA VENDOR SUPPORT', 'U0014');
INSERT INTO `tracking` VALUES (897, 'T201810010044', '2018-10-01 10:02:18', NULL, NULL, NULL, NULL, 'Up Progress To 100 %', 'duplicate ticket', 'U0014');
INSERT INTO `tracking` VALUES (898, 'T201810010045', '2018-10-01 10:28:40', NULL, NULL, NULL, NULL, 'Ticket disetujui', 'TICKET DITERIMA VENDOR SUPPORT', 'U0011');
INSERT INTO `tracking` VALUES (899, 'T201810010045', '2018-10-01 10:30:30', NULL, NULL, NULL, NULL, 'Up Progress To 100 %', 'Dear Bu Putri,\n\nSetelah saya cek via graphon.\ndetail pada tab allocation masih kosng.\nMohon di cek kembali.\nTerlampir capture untuk cn no 0024.\n\nThanks\nHotniel Silaen', 'U0011');
INSERT INTO `tracking` VALUES (900, 'T201808310029', '2018-10-01 10:31:53', NULL, NULL, NULL, NULL, 'Up Progress To 100 %', '', 'U0011');
INSERT INTO `tracking` VALUES (901, 'T201810010043', '2018-10-01 10:35:02', NULL, NULL, NULL, NULL, 'Ticket disetujui', 'TICKET DITERIMA VENDOR SUPPORT', 'U0011');
INSERT INTO `tracking` VALUES (902, 'T201809280042', '2018-10-01 11:05:16', NULL, NULL, NULL, NULL, 'Up Progress To 100 %', 'Dear Pak Ranggaung,\n\nTerlampir update untuk case ini.\n\nThanks\nHotniel Silaen', 'U0011');
INSERT INTO `tracking` VALUES (905, 'T201809190036', '2018-10-01 13:36:13', NULL, NULL, NULL, NULL, 'Up Progress To 100 %', 'Dear Putri,\n\nSetelah saya cek laporan ini sudah sesuai.\nNilai total outstanding nya sudah sama dengan detail invoice outstanding.\n\nMohon di cek kembali.\n\nThanks\nHotniel Silaen', 'U0011');
INSERT INTO `tracking` VALUES (906, 'T201809190037', '2018-10-02 09:12:18', NULL, NULL, NULL, NULL, 'Up Progress To 100 %', 'Dear Pak Ranggaung,\n\nReport ini fungsi awal nya adalah untuk proyeksi penerimaan.\nSedangkan jika request untuk menambahkan payment KPR  akan mengubah fungsi report ini dari proyeksi menjadi realisasi penerimaan.\nDan itu sudah berubah dari konsep awal pak.\n\nThanks\nHotniel Silaen', 'U0011');
INSERT INTO `tracking` VALUES (907, 'T201808090022', '2018-10-02 11:53:20', NULL, NULL, NULL, NULL, 'Up Progress To 100 %', 'Dear Pak Heri,\n\nTerlampir update untuk case ini.\nThanks\nHotniel Silaen', 'U0011');
INSERT INTO `tracking` VALUES (908, 'T201808090022', '2018-10-02 16:38:16', NULL, NULL, NULL, NULL, 'Unsolved', 'Dear Pak Hotniel, mohon di upload ulang dengan file rar atau zip karena file tidak bisa di download, Terima kasih', 'U0008');
INSERT INTO `tracking` VALUES (909, 'T201808090022', '2018-10-02 15:39:30', NULL, NULL, NULL, NULL, 'Diproses oleh vendor support', '', 'U0011');
INSERT INTO `tracking` VALUES (911, 'T201808090022', '2018-10-02 15:40:59', NULL, NULL, NULL, NULL, 'Up Progress To 100 %', 'Terlampir update untuk case berikut.\n\nThanks\nHotniel Silaen', 'U0011');
INSERT INTO `tracking` VALUES (913, 'T201805280002', '2018-10-03 11:13:18', NULL, NULL, NULL, NULL, 'Ticket dikembalikan ke posisi belum di setujui', '', 'U0016');
INSERT INTO `tracking` VALUES (919, 'T201805280002', '2018-10-03 13:42:24', NULL, NULL, NULL, NULL, 'Ticket tidak disetujui', '', 'U0016');
INSERT INTO `tracking` VALUES (920, 'T201805280002', '2018-10-03 13:42:29', NULL, NULL, NULL, NULL, 'Ticket dikembalikan ke posisi belum di setujui', '', 'U0016');
INSERT INTO `tracking` VALUES (931, 'T201810040046', '2018-10-04 16:03:01', NULL, NULL, NULL, NULL, 'Created Ticket', 'TIKET DI BUAT', 'U0008');
INSERT INTO `tracking` VALUES (932, 'T201808310029', '2018-10-04 17:19:42', NULL, NULL, NULL, NULL, 'Unsolved', 'untuk update ini sy simulasi untuk unit J15/21 dengan db backup tgl 13 / 7/ 2018 masih error pak hotniel, mohon di check kembali', 'U0008');
INSERT INTO `tracking` VALUES (933, 'T201810050047', '2018-10-05 10:16:39', NULL, NULL, NULL, NULL, 'Created Ticket', 'TIKET DI BUAT', 'U0006');
INSERT INTO `tracking` VALUES (934, 'T201810050047', '2018-10-05 11:23:32', NULL, NULL, NULL, NULL, 'Ticket disetujui', 'TICKET DITERIMA VENDOR SUPPORT', 'U0011');
INSERT INTO `tracking` VALUES (935, 'T201810050047', '2018-10-05 11:24:36', NULL, NULL, NULL, NULL, 'Up Progress To 100 %', 'Untuk case ini sudah solve sesuai dengan pembicaraan via WA.\n\nThanks\nHotniel Silaen', 'U0011');
INSERT INTO `tracking` VALUES (937, 'T201810040046', '2018-10-05 13:51:33', NULL, NULL, NULL, NULL, 'Ticket disetujui', 'TICKET DITERIMA VENDOR SUPPORT', 'U0011');
INSERT INTO `tracking` VALUES (938, 'T201808310029', '2018-10-05 13:51:41', NULL, NULL, NULL, NULL, 'Diproses oleh vendor support', '', 'U0011');
INSERT INTO `tracking` VALUES (939, 'T201809260039', '2018-10-08 11:11:03', NULL, NULL, NULL, NULL, 'Up Progress To 100 %', 'Dear Pak Heri,\n\nTerlmapir update untuk penambahan tax code di closing SPK. Silahkan diupdatekan ke server.\n\nTerima Kasih\n-Yulianto', 'U0014');
INSERT INTO `tracking` VALUES (940, 'T201809190037', '2018-10-08 12:27:22', NULL, NULL, NULL, NULL, 'Unsolved', 'Dear Hotniel, kalau untuk melihat report proyeksi penerimaan KPR ada dimana jika di report tersebut tidak ada, mohon info.', 'U0009');
INSERT INTO `tracking` VALUES (941, 'T201810080048', '2018-10-08 15:48:12', NULL, NULL, NULL, NULL, 'Created Ticket', 'TIKET DI BUAT', 'U0008');
INSERT INTO `tracking` VALUES (942, 'T201810080048', '2018-10-08 16:02:28', NULL, NULL, NULL, NULL, 'Ticket disetujui', 'TICKET DITERIMA VENDOR SUPPORT', 'U0011');
INSERT INTO `tracking` VALUES (943, 'T201810080048', '2018-10-08 16:06:17', NULL, NULL, NULL, NULL, 'Up Progress To 0 %', 'Dear Pak Heri,\n\nMohon penjelasan untuk kasus ini,\nUntuk revisi ini apakah merevisi harga awal unit atau merevisi payment plan nya saja?\nKarena jika saya lihat dari payment plan yang sudah di buat dengan kode A8/0111 via graphon, total keseluruhannya adalah 1.789.359.000.\nSedang kan harga awal untuk unit ini hanya sekitar 1.6 M.\n\nThanks\nHotniel Silaen', 'U0011');
INSERT INTO `tracking` VALUES (944, 'T201809260039', '2018-10-09 09:39:32', NULL, NULL, NULL, NULL, 'Unsolved', 'Dear pak Yulianto, Mohon dibuatkan juga tax field ini di Closing SPK module SPK lama (Direct), karena kami masih menggunakan module SPK tsb, Terima kasih.', 'U0008');
INSERT INTO `tracking` VALUES (945, 'T201808310029', '2018-10-09 09:55:28', NULL, NULL, NULL, NULL, 'Up Progress To 100 %', 'Dear Pak Heri,\n\nSetelah saya cek, penyebab sales cancel tidak sukses adalah karena data antara sales entry dengan sales cancel tidak sama.\nSaya sudah melakukan tes di lokal saya untuk unit yang sama.\nProses nya adalah status posted nya saya balikin terlebih dahulu ke status belum posting, kemudian unit nya di tarik ulang.\nDan hasilnya sukses cancel dan data di sales entry juga sudah hilang.\nterlampir capture antara graphon dengan lokal.\n\nThanks\nHotniel Silaen', 'U0011');
INSERT INTO `tracking` VALUES (946, 'T201809190037', '2018-10-09 10:18:32', NULL, NULL, NULL, NULL, 'Diproses oleh vendor support', '', 'U0011');
INSERT INTO `tracking` VALUES (947, 'T201809190037', '2018-10-09 10:22:47', NULL, NULL, NULL, NULL, 'Up Progress To 0 %', 'Pak Ranggaung,,\n\nUntuk report Proyeksi penerimaan KPR saat ini belum ada di system.\nDan jika ingin di buatkan akan di kenakan charge.\nUntuk format nya mohon di kirimkan atau menggunakan format yang terlampir.?\n\nThanks\nHotniel Silaen', 'U0011');
INSERT INTO `tracking` VALUES (948, 'T201810040046', '2018-10-09 13:18:28', NULL, NULL, NULL, NULL, 'Up Progress To 100 %', 'Pak Heri,\n\nUntuk case ini setelah saya cek tidak bisa posting karena ada 1 unit yang approve nya sudah ceklist namun tgl serah terima nya masih kosong.\nUnit A16 / 25, atas nama : TJOENG DEWI KARTIKA.\nSetelah approve nya saya uncek, proses posting dapat dilakukan.\nMohon di cek kembali.\n\nThanks\nHotniel Silaen', 'U0011');
INSERT INTO `tracking` VALUES (949, 'T201808310029', '2018-10-09 17:29:40', NULL, NULL, NULL, NULL, 'Unsolved', 'Dear pak Hotniel, mohon di kirim update sesuai pembicaraan di WA, terima kasih', 'U0008');
INSERT INTO `tracking` VALUES (950, 'T201808310029', '2018-10-09 16:30:04', NULL, NULL, NULL, NULL, 'Diproses oleh vendor support', '', 'U0011');
INSERT INTO `tracking` VALUES (951, 'T201808310029', '2018-10-09 16:30:43', NULL, NULL, NULL, NULL, 'Up Progress To 100 %', 'Pak Heri,\n\nTerlampir update untuk case ini.\n\nThanks\nHotniel Silaen', 'U0011');
INSERT INTO `tracking` VALUES (952, 'T201810080048', '2018-10-10 11:57:58', NULL, NULL, NULL, NULL, 'Feedback User ', 'sudah dijelaskan kasus ini via telp dengan pak hotniel, dan sedang proses perbaikan.', 'U0008');
INSERT INTO `tracking` VALUES (953, 'T201810110049', '2018-10-11 09:15:09', NULL, NULL, NULL, NULL, 'Created Ticket', 'TIKET DI BUAT', 'U0008');
INSERT INTO `tracking` VALUES (954, 'T201810110049', '2018-10-11 09:26:29', NULL, NULL, NULL, NULL, 'Ticket disetujui', 'TICKET DITERIMA VENDOR SUPPORT', 'U0014');
INSERT INTO `tracking` VALUES (955, 'T201810110049', '2018-10-11 09:29:01', NULL, NULL, NULL, NULL, 'Up Progress To 0 %', 'Pak, salah pilih nomor SPK induk nya tidak? karena bapak tidak mencantumkan nomor SPK saya tidak bisa cek. Kalau saya cek di SPK induk nomor JC/SM/18/07/00001 ada semua data nya.', 'U0014');
INSERT INTO `tracking` VALUES (956, 'T201810110049', '2018-10-11 11:00:23', NULL, NULL, NULL, NULL, 'Feedback User ', 'Untuk SPK induk JC/SM/18/07/00001 memang di form booking estimate ada pak, tapi waktu pemilihan activity di form SPK Entry, activity tsb tidak ada di display pak', 'U0008');
INSERT INTO `tracking` VALUES (957, 'T201810110049', '2018-10-11 10:25:17', NULL, NULL, NULL, NULL, 'Up Progress To 0 %', 'bisa diinfo nomor spk nya berapa yang mau dipakai, karena tidak ada capture nya pak.', 'U0014');
INSERT INTO `tracking` VALUES (958, 'T201810110049', '2018-10-11 13:03:07', NULL, NULL, NULL, NULL, 'Feedback User ', 'JC/SM/18/07/00001   utk Cluster Shinano', 'U0008');
INSERT INTO `tracking` VALUES (959, 'T201810110049', '2018-10-12 10:03:05', NULL, NULL, NULL, NULL, 'Up Progress To 100 %', 'Dear Pak Heri,\n\nPak silahkan dicek kembali ya, sudah saya munculkan data nya.\nterlampir juga capture nya.\n\nTerima Kasih\n-Yulianto', 'U0014');
INSERT INTO `tracking` VALUES (960, 'T201809260039', '2018-10-12 14:55:51', NULL, NULL, NULL, NULL, 'Diproses oleh vendor support', '', 'U0014');
INSERT INTO `tracking` VALUES (961, 'T201809260039', '2018-10-12 16:30:07', NULL, NULL, NULL, NULL, 'Up Progress To 100 %', 'Dear Pak Heri\n\nTermalpir update untuk SPK Close Direct, Silahkan bisa diupdate ke server.\n\nTerima Kasih\n-Yulianto', 'U0014');
INSERT INTO `tracking` VALUES (962, 'T201810160050', '2018-10-16 13:43:57', NULL, NULL, NULL, NULL, 'Created Ticket', 'TIKET DI BUAT', 'U0008');
INSERT INTO `tracking` VALUES (963, 'T201810160051', '2018-10-16 14:05:16', NULL, NULL, NULL, NULL, 'Created Ticket', 'TIKET DI BUAT', 'U0008');
INSERT INTO `tracking` VALUES (964, 'T201810160051', '2018-10-16 14:20:35', NULL, NULL, NULL, NULL, 'Ticket disetujui', 'TICKET DITERIMA VENDOR SUPPORT', 'U0014');
INSERT INTO `tracking` VALUES (965, 'T201810160051', '2018-10-16 14:22:07', NULL, NULL, NULL, NULL, 'Up Progress To 100 %', 'Dear Pak Heri,\n\nUntuk hal ini saya sudah cek, kendalanya ada di spk close nya, yang mana view untuk cari spk nya ada yang kurang.\nTerlampir file update nya, silahkan diupdate ke server.\n\nTerima Kasih\n-Yulianto', 'U0014');
INSERT INTO `tracking` VALUES (966, 'T201810160052', '2018-10-16 16:06:36', NULL, NULL, NULL, NULL, 'Created Ticket', 'TIKET DI BUAT', 'U0008');
INSERT INTO `tracking` VALUES (967, 'T201810160052', '2018-10-16 16:08:17', NULL, NULL, NULL, NULL, 'Ticket disetujui', 'TICKET DITERIMA VENDOR SUPPORT', 'U0014');
INSERT INTO `tracking` VALUES (968, 'T201810160052', '2018-10-16 16:10:38', NULL, NULL, NULL, NULL, 'Up Progress To 100 %', 'Dear Pak Heri,\n\nterlampir untuk update kendala posting SPK close direct nya ya.\nSilahkan bisa diupdatekan ke server.\n\nTerima Kasih\n-Yulianto', 'U0014');
INSERT INTO `tracking` VALUES (969, 'T201810010043', '2018-10-17 10:59:47', NULL, NULL, NULL, NULL, 'Up Progress To 100 %', 'Dear Putri,\n\nTerlampir update untuk case ini.\n\nThanks\nHotniel Silaen', 'U0011');
INSERT INTO `tracking` VALUES (970, 'T201807270018', '2018-10-18 11:53:42', NULL, NULL, NULL, NULL, 'Unsolved', 'masih beberapa kali terjadi user locked, dan beberapa kalo saat user mau posting terjadi query time out.', 'U0006');
INSERT INTO `tracking` VALUES (971, 'T201810220053', '2018-10-22 16:36:43', NULL, NULL, NULL, NULL, 'Created Ticket', 'TIKET DI BUAT', 'U0005');
INSERT INTO `tracking` VALUES (972, 'T201810240054', '2018-10-24 16:28:20', NULL, NULL, NULL, NULL, 'Created Ticket', 'TIKET DI BUAT', 'U0008');
INSERT INTO `tracking` VALUES (973, 'T201810220053', '2018-10-25 10:59:25', NULL, NULL, NULL, NULL, 'Ticket disetujui', 'TICKET DITERIMA VENDOR SUPPORT', 'U0011');
INSERT INTO `tracking` VALUES (974, 'T201810240054', '2018-10-25 10:59:22', NULL, NULL, NULL, NULL, 'Ticket disetujui', 'TICKET DITERIMA VENDOR SUPPORT', 'U0011');
INSERT INTO `tracking` VALUES (975, 'T201810240054', '2018-10-25 10:59:36', NULL, NULL, NULL, NULL, 'Ticket disetujui', 'TICKET DITERIMA VENDOR SUPPORT', 'U0011');
INSERT INTO `tracking` VALUES (976, 'T201810240054', '2018-10-25 11:16:44', NULL, NULL, NULL, NULL, 'Up Progress To 100 %', 'Dear Pak Heri,\n\nSetelah saya cek. \nUntuk proses upprove ini ada validasi data yang tidak boleh kosong, yaitu :\nNo PPJB, Tgl PPJB dan Tanggal Janji ST PPJB.\n\nThanks\nHotniel Silaen', 'U0011');
INSERT INTO `tracking` VALUES (977, 'T201810220053', '2018-10-25 11:26:35', NULL, NULL, NULL, NULL, 'Up Progress To 0 %', 'Pak Heri,\n\nUntuk hal ini akan kami cek terlebih dahulu.\n\nThanks\nHotniel Silaen', 'U0011');
INSERT INTO `tracking` VALUES (978, 'T201810240054', '2018-10-25 12:44:06', NULL, NULL, NULL, NULL, 'Unsolved', 'Dear team AST, untuk approve PPJB tolong tanggal janji ST PPJB tdk dijadikan mandatory sbg validasi, karena user saat ini hanya mengisi tanggal ambil PPJB saja, terima kasih. ', 'U0008');
INSERT INTO `tracking` VALUES (979, 'T201810240054', '2018-10-25 11:49:48', NULL, NULL, NULL, NULL, 'Diproses oleh vendor support', '', 'U0011');
INSERT INTO `tracking` VALUES (980, 'T201807270018', '2018-10-25 11:49:50', NULL, NULL, NULL, NULL, 'Diproses oleh vendor support', '', 'U0011');
INSERT INTO `tracking` VALUES (981, 'T201810240054', '2018-10-25 11:50:38', NULL, NULL, NULL, NULL, 'Up Progress To 100 %', 'Pak Heri,\n\nTerlampir update untuk case berikut.\n\nThanks\nHotniel Silaen', 'U0011');
INSERT INTO `tracking` VALUES (982, 'T201810300055', '2018-10-30 17:40:41', NULL, NULL, NULL, NULL, 'Created Ticket', 'TIKET DI BUAT', 'U0008');
INSERT INTO `tracking` VALUES (983, 'T201810300055', '2018-10-31 08:55:39', NULL, NULL, NULL, NULL, 'Ticket disetujui', 'TICKET DITERIMA VENDOR SUPPORT', 'U0011');
INSERT INTO `tracking` VALUES (984, 'T201810300055', '2018-10-31 08:58:47', NULL, NULL, NULL, NULL, 'Up Progress To 100 %', 'Dear Pak Heri,\n\nUntuk case ini, data yang di database adalah data yang ketinggalan.\nDulu saya sudah pernah perbaiki data yang start date nya null, kemungkinan data yang muncul sekarang itu kelewat.\nUntuk sementara data nya sudah saya perbaiki.\nUntuk perbaikan secara system sudah pernah di update terkait case ini.\nYaitu dengan penambahan Trigger.\n\nThanks\nHotniel Silaen', 'U0011');
INSERT INTO `tracking` VALUES (985, 'T201810300055', '2018-10-31 11:06:41', NULL, NULL, NULL, NULL, 'Unsolved', 'Dear team AST, mohon bantuanny untuk di check kembali kasus ini, karena saat ini di live masih ada 60 item yang sdate dan edate nya null,  terima kasih.', 'U0008');
INSERT INTO `tracking` VALUES (986, 'T201810300055', '2018-10-31 10:08:38', NULL, NULL, NULL, NULL, 'Diproses oleh vendor support', '', 'U0011');
INSERT INTO `tracking` VALUES (987, 'T201810300055', '2018-10-31 10:09:18', NULL, NULL, NULL, NULL, 'Up Progress To 0 %', 'Pak Heri,\n\nUntuk Hal ini sedang kami lakukan pengecekan kembali pak.\n\nThanks\nHotniel Silaen', 'U0011');
INSERT INTO `tracking` VALUES (988, 'T201810310056', '2018-10-31 13:26:40', NULL, NULL, NULL, NULL, 'Created Ticket', 'TIKET DI BUAT', 'U0006');
INSERT INTO `tracking` VALUES (989, 'T201810310056', '2018-10-31 13:36:54', NULL, NULL, NULL, NULL, 'Ticket disetujui', 'TICKET DITERIMA VENDOR SUPPORT', 'U0014');
INSERT INTO `tracking` VALUES (990, 'T201810310056', '2018-10-31 13:40:10', NULL, NULL, NULL, NULL, 'Up Progress To 100 %', 'Dear Bu Putri,\n\nHal yang bu Putri sampaikan bukanlah error secara sistem, namun di progress yang ke 3 tanggal 9/6/2016 sudah mencapai 100% baik itu progress kerja dan juga progress invoice nya. Semua progress yang sudah 100%, ketika di buat progress berikutnya tidak akan ada data nya.\n\nDemikiain informasi dari saya. Terlampir juga capture progress ke 3 nya.', 'U0014');
INSERT INTO `tracking` VALUES (991, 'T201811050057', '2018-11-05 17:21:53', NULL, NULL, NULL, NULL, 'Created Ticket', 'TIKET DI BUAT', 'U0006');
INSERT INTO `tracking` VALUES (992, 'T201811050057', '2018-11-06 08:55:36', NULL, NULL, NULL, NULL, 'Ticket disetujui', 'TICKET DITERIMA VENDOR SUPPORT', 'U0011');
INSERT INTO `tracking` VALUES (993, 'T201811050057', '2018-11-06 08:56:39', NULL, NULL, NULL, NULL, 'Up Progress To 0 %', 'Dear Putri,\n\nUntuk hal ini akan kami cek terlebih dahulu.\n\nThanks\nHotniel Silaen', 'U0011');
INSERT INTO `tracking` VALUES (994, 'T201809190037', '2018-11-06 14:25:47', NULL, NULL, NULL, NULL, 'Up Progress To 100 %', '', 'U0011');
INSERT INTO `tracking` VALUES (995, 'T201810220053', '2018-11-06 14:52:36', NULL, NULL, NULL, NULL, 'Up Progress To 100 %', 'Dear Pak Heri,\n\nTerlampir update untuk case ini.\n\nThanks\nHotniel Silaen', 'U0011');
INSERT INTO `tracking` VALUES (996, 'T201810080048', '2018-11-06 14:55:07', NULL, NULL, NULL, NULL, 'Up Progress To 100 %', 'Dear Pak Heri,\n\nUntuk validasi ini sudah ada sebelumnya.\nberikut saya lampirkan sp validasi revisinya.\n\nThanks\nHotniel Silaen', 'U0011');
INSERT INTO `tracking` VALUES (997, 'T201810300055', '2018-11-06 14:59:09', NULL, NULL, NULL, NULL, 'Up Progress To 100 %', 'Dear Pak Heri,\n\nUntuk hal ini sudah di pasang trigger pada transaksi yang melakukan proses update start_date dan end_date jadi null.\nJika ada proses yang melakukan update tersebut maka transaksi akan otomatis di rollback, dan akan muncul notif error.\nUntuk data yang masih ada sekarang, tidak bisa di update lagi pak, di karenakan data pendukung dari billing nya juga tidak ada.\n\nThanks\nHotniel Silaen', 'U0011');
INSERT INTO `tracking` VALUES (998, 'T201811050057', '2018-11-06 16:01:02', NULL, NULL, NULL, NULL, 'Up Progress To 100 %', 'Dear Putri,\n\nTerlampir update untuk case ini.\nPerbaikan sp posting transaksi.\n\nThanks\nHotniel Silaen', 'U0011');
INSERT INTO `tracking` VALUES (999, 'T201811050057', '2018-11-07 10:51:16', NULL, NULL, NULL, NULL, 'Unsolved', 'mohon bantuannya untuk kasus ini yg modul fix asset juga terdapat nilai null pada source_codenya', 'U0006');
INSERT INTO `tracking` VALUES (1000, 'T201811050057', '2018-11-07 13:03:33', NULL, NULL, NULL, NULL, 'Diproses oleh vendor support', '', 'U0011');
INSERT INTO `tracking` VALUES (1001, 'T201811050057', '2018-11-07 13:28:30', NULL, NULL, NULL, NULL, 'Up Progress To 100 %', 'Dear Putri,\n\nBerikut update untuk source code null.\nupdate acc_gltrans set source_code = \'FA\' where source_code is null and trx_type = \'FA\'\nTerlampir update untuk proses perbaikan transaksi nya.\n\nThanks\nHotniel Silaen', 'U0011');
INSERT INTO `tracking` VALUES (1002, 'T201811090058', '2018-11-09 10:01:50', NULL, NULL, NULL, NULL, 'Created Ticket', 'TIKET DI BUAT', 'U0018');
INSERT INTO `tracking` VALUES (1003, 'T201811120059', '2018-11-12 09:49:53', NULL, NULL, NULL, NULL, 'Created Ticket', 'TIKET DI BUAT', 'U0006');
INSERT INTO `tracking` VALUES (1004, 'T201811120059', '2018-11-12 10:48:24', NULL, NULL, NULL, NULL, 'Ticket disetujui', 'TICKET DITERIMA VENDOR SUPPORT', 'U0014');
INSERT INTO `tracking` VALUES (1005, 'T201811120059', '2018-11-12 10:56:17', NULL, NULL, NULL, NULL, 'Up Progress To 100 %', 'Dear Bu Putri,\n\nTerlampir untuk update nya. Silahkan di run di server.\n\nTerima Kasih\n-Yulianto', 'U0014');
INSERT INTO `tracking` VALUES (1006, 'T201811120059', '2018-11-12 15:20:22', NULL, NULL, NULL, NULL, 'Unsolved', 'dear ast, untuk form approve contract renewal masihada di modul AR. terimakasih', 'U0006');
INSERT INTO `tracking` VALUES (1007, 'T201811120060', '2018-11-12 14:26:15', NULL, NULL, NULL, NULL, 'Created Ticket', 'TIKET DI BUAT', 'U0006');
INSERT INTO `tracking` VALUES (1008, 'T201811120060', '2018-11-12 16:25:05', NULL, NULL, NULL, NULL, 'Ticket disetujui', 'TICKET DITERIMA VENDOR SUPPORT', 'U0011');
INSERT INTO `tracking` VALUES (1009, 'T201811120059', '2018-11-13 09:01:19', NULL, NULL, NULL, NULL, 'Diproses oleh vendor support', '', 'U0014');
INSERT INTO `tracking` VALUES (1010, 'T201811120059', '2018-11-13 09:12:39', NULL, NULL, NULL, NULL, 'Up Progress To 100 %', 'Dear Bu Putri,\n\nUntuk hal ini sudah saya bantu update ke live nya, script dari saya mungkin termasuk begin rollback yang bu Putri jalankan sehingga tidak terupdate.\n\nSaya lampirkan capture di sistem live nya.\n\nTerima Kasih\n-Yulianto', 'U0014');
INSERT INTO `tracking` VALUES (1011, 'T201811120060', '2018-11-13 11:03:24', NULL, NULL, NULL, NULL, 'Up Progress To 100 %', 'Dear Bu Putri,\n\nBu untuk hal ini sudah kami bantu perbaiki ya, secara data nya karena ada kesalahan ketika input tipe transaksi yang mana seharusnya service diinputkan rental. Hal ini lebih ke arah master data (tipe transaksinya).\n\nMohon bisa dicek dahulu untuk hal ini.\n\nTerima Kasih\n-Yulianto', 'U0011');
INSERT INTO `tracking` VALUES (1012, 'T201811090058', '2018-11-13 11:04:41', NULL, NULL, NULL, NULL, 'Ticket disetujui', 'TICKET DITERIMA VENDOR SUPPORT', 'U0014');
INSERT INTO `tracking` VALUES (1013, 'T201811090058', '2018-11-13 11:05:59', NULL, NULL, NULL, NULL, 'Up Progress To 100 %', 'Dear Pak Dikson,\n\nUntuk hal ini mohon cek dahulu untuk setting graphon nya yang tidak bisa print, karena dari sistem kami tidak ada validasi report terkait dengan graphon nya.\n\nTerima Kasih\n-Yulianto', 'U0014');
INSERT INTO `tracking` VALUES (1014, 'T201811140061', '2018-11-14 16:25:59', NULL, NULL, NULL, NULL, 'Created Ticket', 'TIKET DI BUAT', 'U0006');
INSERT INTO `tracking` VALUES (1015, 'T201811140061', '2018-11-14 16:30:58', NULL, NULL, NULL, NULL, 'Ticket disetujui', 'TICKET DITERIMA VENDOR SUPPORT', 'U0014');
INSERT INTO `tracking` VALUES (1016, 'T201811140061', '2018-11-14 17:13:03', NULL, NULL, NULL, NULL, 'Up Progress To 100 %', 'Dear Bu Putri,\n\nMohon cek tanggal billing yang akan dibentuk, karena itu muncul informasi bahwa tanggal billing yang akan digenerate lebih kecil dari periode accounting nya.\nSaya cek data nya (terlampir) billing nya mulai bulan 7 2018, sedangkan periode accounting nya sudah di bulan 10 2018.\n\nTerima Kasih\n-Yulianto', 'U0014');
INSERT INTO `tracking` VALUES (1017, 'T201811090058', '2018-11-15 09:32:22', NULL, NULL, NULL, NULL, 'Unsolved', 'tanggal 14 november masih error lagi.', 'U0018');
INSERT INTO `tracking` VALUES (1018, 'T201811140061', '2018-11-15 10:02:41', NULL, NULL, NULL, NULL, 'Unsolved', 'untuk tanggal di maintanance entry sudah di ganti ke bulan berjalan. ', 'U0006');
INSERT INTO `tracking` VALUES (1019, 'T201811120060', '2018-11-15 12:05:49', NULL, NULL, NULL, NULL, 'Unsolved', 'dear AST, saya sudah coba input data baru lagi. tapi di other charge tetap tidak muncul. contoh datanya = TM/18/10/00008, TM/18/10/00004. \nmohon bantuannya, terima kasih', 'U0006');
INSERT INTO `tracking` VALUES (1020, 'T201811140061', '2018-11-16 09:14:23', NULL, NULL, NULL, NULL, 'Diproses oleh vendor support', '', 'U0014');
INSERT INTO `tracking` VALUES (1021, 'T201811140061', '2018-11-16 09:20:34', NULL, NULL, NULL, NULL, 'Up Progress To 0 %', 'Dear Bu Putri,\n\nUntuk hal ini seperti yang sebelumnya saya infokan, ada data billing yang lebih kecil dari accounting periode yang belum diposting. Saat sekarang mau posting itu sistem cek, billing yang belum diposting lebih kecil sama dengan periode yang diinput di form posting invoice itu ada tidak, jika ada yang lebih kecil dari periode accounting, sistem akan notif tidak bisa diposting. Saya lampirkan capturenya. dan yang yang jadi pertanyaan saya, periode invoice bulan 8 dan 9 kenapa tidak diposting sebelumnya? saya cek audit date nya terakhir di edit tanggal 14 november 2018.\nTolong konfirmasi ke usernya, bahwa data yang akan jadi invoice periode bulan 8 dan 9 tidak bisa digenerate. Jika sudah confirm akan saya hapus data nya.\n\nTerima Kasih\n-Yulianto', 'U0014');
INSERT INTO `tracking` VALUES (1022, 'T201811120060', '2018-11-16 15:24:29', NULL, NULL, NULL, NULL, 'Diproses oleh vendor support', '', 'U0011');
INSERT INTO `tracking` VALUES (1023, 'T201811090058', '2018-11-21 13:34:31', NULL, NULL, NULL, NULL, 'Up Progress To 100 %', 'Inject db', '');
INSERT INTO `tracking` VALUES (1024, 'T201811120060', '2018-11-21 14:35:12', NULL, NULL, NULL, NULL, 'Up Progress To 0 %', 'Dear Bu Putri, \n\nUntuk data tersebut masih dalam kondisi indikator S pada saat di database, makanya data tidak dapat keluar, untuk itu data2 tsb di atas sudah kami perbaiki dan ada update form agar kejadian di ataas tidak terulang lagi.\n\nTerimakasih.\n\nNoksmo', 'U0011');
INSERT INTO `tracking` VALUES (1025, 'T201807270018', '2018-11-21 15:35:49', NULL, NULL, NULL, NULL, 'Up Progress To 100 %', 'Dear Bu Putri,\n\nUntuk Ticket ini sudah pernah ada update dari Pak Hotniel.\n\nTerimakasih.\n\nNoksmo', 'U0011');
INSERT INTO `tracking` VALUES (1026, 'T201811140061', '2018-11-21 15:38:39', NULL, NULL, NULL, NULL, 'Up Progress To 0 %', 'Dear Bu Putri,\n\nUntuk case ini permasalahannya pada data, karena ada data pada billing yang belum di generate dan sudah lewat dari accounting periode.\n\nsilahkan di cek kembali, karena kesalahannya bukan pada system tapi pada datanya.\n\nMohon di respon kembali.\n\nTerimkasih.\n\nNoksmo', 'U0014');
INSERT INTO `tracking` VALUES (1027, 'T201807270018', '2018-11-21 16:42:44', NULL, NULL, NULL, NULL, 'Unsolved', 'dear team AST, untuk kasus ini saya unsolved lagi karena masih sering terjadi user locked.\nterimakasih', 'U0006');
INSERT INTO `tracking` VALUES (1028, 'T201811140061', '2018-11-21 16:44:11', NULL, NULL, NULL, NULL, 'Unsolved', 'dear team AST, untuk kasus ini sudah dijelaskan by phone. dan tolong di koordinasikan ke hotniel kembali.\nterimakasih.', 'U0006');
INSERT INTO `tracking` VALUES (1029, 'T201811140061', '2018-11-21 15:57:53', NULL, NULL, NULL, NULL, 'Diproses oleh vendor support', '', 'U0014');
INSERT INTO `tracking` VALUES (1030, 'T201807270018', '2018-11-21 16:18:23', NULL, NULL, NULL, NULL, 'Diproses oleh vendor support', '', 'U0011');
INSERT INTO `tracking` VALUES (1031, 'T201811140061', '2018-11-21 16:31:13', NULL, NULL, NULL, NULL, 'Up Progress To 0 %', 'Dear Bu Putri,\n\nberdasarkan hasil diskusi yang dilakukan via telephone dengan pak hendri,\ncase ini akan merubah konsep yang sudah ada. Sehingga untuk case ini akan di kenakan charge maindays.\nKonsep lama : tidak bisa generate invoice jika tgl billing lebih kecil dari period excisting\nkonsep baru : bisa generate invoice dengan tgl billing lebih kecil dari period excisting.\n\nUntuk Perubahan konsep ini silahkan kirim konsep detailnya via email agar dapat di buatkan change request.\n\nTerimakasih.\nHotniel.', 'U0014');
INSERT INTO `tracking` VALUES (1032, 'T201807270018', '2018-11-21 16:36:28', NULL, NULL, NULL, NULL, 'Up Progress To 0 %', 'Dear Bu Putri, \n\nuntuk case ini, masih di lakukan proses upgrade system.\n\nTerimakasih.', 'U0011');
INSERT INTO `tracking` VALUES (1033, 'T201811230062', '2018-11-23 09:17:42', NULL, NULL, NULL, NULL, 'Created Ticket', 'TIKET DI BUAT', 'U0006');
INSERT INTO `tracking` VALUES (1034, 'T201811230062', '2018-11-23 10:18:51', NULL, NULL, NULL, NULL, 'Ticket disetujui', 'TICKET DITERIMA VENDOR SUPPORT', 'U0014');
INSERT INTO `tracking` VALUES (1035, 'T201811230062', '2018-11-23 10:30:11', NULL, NULL, NULL, NULL, 'Up Progress To 100 %', 'Dear bu Putri,\n\nUntuk hal ini sudah saya perbaiki. Saya lampirkan juga capturenya. dan hal ini sudah saya cek tidak dilakukan hardcode secara sistem, namun membaca tipe transaksi ketika input data di GL manual nya.\n\nTerima Kasih\n-Yulianto', 'U0014');
INSERT INTO `tracking` VALUES (1036, 'T201811260063', '2018-11-26 16:29:57', NULL, NULL, NULL, NULL, 'Created Ticket', 'TIKET DI BUAT', 'U0008');
INSERT INTO `tracking` VALUES (1043, 'T201811260063', '2018-11-26 16:44:37', NULL, NULL, NULL, NULL, 'Ticket disetujui', 'TICKET DITERIMA VENDOR SUPPORT', 'U0011');
INSERT INTO `tracking` VALUES (1044, 'T201811260063', '2018-11-26 17:07:59', NULL, NULL, NULL, NULL, 'Up Progress To 0 %', 'Dear Pak Heri Darmawan,\n\nBerikut Terlampir Update Form Untuk Validasi Pengalihan Hak.\nMohon di Cek Kembali.\n\nThx\nNoksmo.', 'U0011');
INSERT INTO `tracking` VALUES (1045, 'T201811260063', '2018-11-27 09:46:08', NULL, NULL, NULL, NULL, 'Unsolved', 'Dear pak Noksmo, mohon di upload ulang dengan file zip atau rar, karena file tidak bisa di download, terima kasih', 'U0008');
INSERT INTO `tracking` VALUES (1046, 'T201811260063', '2018-11-28 09:44:59', NULL, NULL, NULL, NULL, 'Diproses oleh vendor support', '', 'U0011');
INSERT INTO `tracking` VALUES (1047, 'T201811260063', '2018-11-28 09:47:46', NULL, NULL, NULL, NULL, 'Up Progress To 0 %', 'Dear Pak Heri Darmawan,\nSudah di reupload, dan sudah di jadikan RAR, sebelumnya sebenarnya adalah zip pak.\nMohond Di cek Kembali\n\nTerimakasih.\n\nNoksmo', 'U0011');
INSERT INTO `tracking` VALUES (1048, 'T201812040064', '2018-12-04 14:05:36', NULL, NULL, NULL, NULL, 'Created Ticket', 'TIKET DI BUAT', 'U0006');
INSERT INTO `tracking` VALUES (1049, 'T201812040064', '2018-12-04 14:41:57', NULL, NULL, NULL, NULL, 'Ticket disetujui', 'TICKET DITERIMA VENDOR SUPPORT', 'U0011');
INSERT INTO `tracking` VALUES (1050, 'T201812040064', '2018-12-04 14:47:31', NULL, NULL, NULL, NULL, 'Up Progress To 100 %', 'Dear Putri,\n\nUntuk case ini setelah saya cek datanya.\nInvoice yang akan di tagihkan itu tidak ada flag \'C\' pada field cash_basis di table ar_ledger.\nUntuk data nya sudah saya perbaiki. \n\nThanks\nHotniel Silaen', 'U0011');
INSERT INTO `tracking` VALUES (1051, 'T201812110065', '2018-12-11 10:38:45', NULL, NULL, NULL, NULL, 'Created Ticket', 'TIKET DI BUAT', 'U0006');
INSERT INTO `tracking` VALUES (1052, 'T201812110065', '2018-12-11 14:19:56', NULL, NULL, NULL, NULL, 'Ticket disetujui', 'TICKET DITERIMA VENDOR SUPPORT', 'U0011');
INSERT INTO `tracking` VALUES (1053, 'T201812110065', '2018-12-11 14:21:31', NULL, NULL, NULL, NULL, 'Up Progress To 0 %', 'Dear Bu Putri \n\nBerikut terlampir Update form, silahkan di update dan di cek kembli.\n\nThx \nNoksmo', 'U0011');
INSERT INTO `tracking` VALUES (1054, 'T201812110065', '2018-12-11 16:11:32', NULL, NULL, NULL, NULL, 'Unsolved', 'dear team AST, untuk update yg diberikan hanya yp update pada rate di standing charge. yg seharusnya nilai amountnya juga ikut terupdate.\ndan pada ownership entry kolom lot assign itu tidak ikut terupdate.\nMohon bantuaanya, Terimakasih', 'U0006');
INSERT INTO `tracking` VALUES (1055, 'T201812110065', '2018-12-11 16:04:10', NULL, NULL, NULL, NULL, 'Diproses oleh vendor support', '', 'U0011');
INSERT INTO `tracking` VALUES (1056, 'T201812110065', '2018-12-11 16:06:03', NULL, NULL, NULL, NULL, 'Up Progress To 0 %', 'Dear Bu Putri, \n\nAda Update activeX dan form. Untuk perbaikan nilai trx dan rate di lot assign.\n\nSilahkan di update dan di cek kembali.\nTerimakasih.', 'U0011');
INSERT INTO `tracking` VALUES (1057, 'T201812140066', '2018-12-14 14:17:14', NULL, NULL, NULL, NULL, 'Created Ticket', 'TIKET DI BUAT', 'U0008');
INSERT INTO `tracking` VALUES (1061, 'T201812140066', '2018-12-14 14:58:22', NULL, NULL, NULL, NULL, 'Ticket disetujui', 'TICKET DITERIMA VENDOR SUPPORT', 'U0011');
INSERT INTO `tracking` VALUES (1062, 'T201812140066', '2018-12-14 15:34:17', NULL, NULL, NULL, NULL, 'Up Progress To 0 %', 'Dear Pak Heri,\n\nUntuk hal tersebut adalah warning pak, bahwa nilai yang bisa di masukan hanya sebesar nilai tersebut dan untuk OR di sales itu jika potong pph maka nilai yang di alokasikan di kurang dengan PPHnya seperti di gambar adalah hasil total tagihan di kurang dengan PPHnya. Untuk cara input juga silahkan centang paidnya agar ada requery untuk form OR tersebut agar nilainya tidak salah, dan jika di lihat dati total pembayaran memang ada kekurangan pembayaran sebesar 16 rupiah dan di Sales OR spec ada batasan cash difference sebesar 500 jadi tetap di anggap lunas. \n\nBerikut penjelasan dan screen shootnya, karena dari project-projcet di modern yang berjalan form ini tidak bermasalah pak.\n\nTerimakasih.\nNoksmo.', 'U0011');
INSERT INTO `tracking` VALUES (1063, 'T201812140066', '2018-12-14 17:20:10', NULL, NULL, NULL, NULL, 'Unsolved', 'Dear pak Noksmo, kalau dilihat dari tax scheme pph ny inclusive, itu kalau saya coba OR invoice nya di lokal server dia masih ada outstanding di invoice tsb senilai PPH, mohon infony.', 'U0008');
INSERT INTO `tracking` VALUES (1064, 'T201812140066', '2018-12-14 16:22:57', NULL, NULL, NULL, NULL, 'Diproses oleh vendor support', '', 'U0011');
INSERT INTO `tracking` VALUES (1065, 'T201812140066', '2018-12-14 16:27:04', NULL, NULL, NULL, NULL, 'Up Progress To 0 %', 'Dear Pak Heri,\n\nBetul pak akan ada outstanding karena nanti bukti potong pph harus di masukkan di form input bukti potong, kalau pph itu tidak ada inclusive atau exclusive yang ada di PPN pak.\nNilai invoice akan lunas jika bukti potong pph sudah di input di form bukti potong. seperti di gambar terlampir.\n\nTerimakasih,', 'U0011');
INSERT INTO `tracking` VALUES (1066, 'T201812190067', '2018-12-19 14:57:32', NULL, NULL, NULL, NULL, 'Created Ticket', 'TIKET DI BUAT', 'U0017');
INSERT INTO `tracking` VALUES (1067, 'T201812190068', '2018-12-19 16:26:45', NULL, NULL, NULL, NULL, 'Created Ticket', 'TIKET DI BUAT', 'U0008');
INSERT INTO `tracking` VALUES (1068, 'T201812190067', '2018-12-19 18:10:32', NULL, NULL, NULL, NULL, 'Ticket disetujui', 'TICKET DITERIMA VENDOR SUPPORT', 'U0014');
INSERT INTO `tracking` VALUES (1069, 'T201812190068', '2018-12-19 18:11:21', NULL, NULL, NULL, NULL, 'Ticket disetujui', 'TICKET DITERIMA VENDOR SUPPORT', 'U0014');
INSERT INTO `tracking` VALUES (1070, 'T201812190067', '2018-12-27 15:11:39', NULL, NULL, NULL, NULL, 'Up Progress To 0 %', 'Dear Pak Kukuh,\n\nTerlampir update untuk bentukan jurnal debit note module AP.\nSilahkan diupdatekan ke server\n\nTerima Kasih\n-Yulianto', 'U0014');
INSERT INTO `tracking` VALUES (1071, 'T201812190068', '2018-12-27 15:23:14', NULL, NULL, NULL, NULL, 'Up Progress To 100 %', 'Dear Pak Heri,\n\nTerlampir update untuk nilai total OR yang berbeda ya. Silahkan diupdatekan ke server.\n\nTerima Kasih\n-Yulianto', 'U0014');
INSERT INTO `tracking` VALUES (1072, 'T201812280069', '2018-12-28 14:15:13', NULL, NULL, NULL, NULL, 'Created Ticket', 'TIKET DI BUAT', 'U0008');
INSERT INTO `tracking` VALUES (1073, 'T201812280069', '2018-12-28 14:26:21', NULL, NULL, NULL, NULL, 'Ticket disetujui', 'TICKET DITERIMA VENDOR SUPPORT', 'U0014');
INSERT INTO `tracking` VALUES (1074, 'T201812280069', '2018-12-28 14:27:54', NULL, NULL, NULL, NULL, 'Up Progress To 100 %', 'Dear Pak Heri,\n\nDari hasil perbaikan kemarin, di lokal saya tidak ada kendala terkait print out debit note nya. Saya lampirkan capture dari saya.\nMohon dicek kembali dari sisi update nya sudah semua atau belum dan yang bapak sampaikan di lokal atau di live.\n\nTerima Kasih\n-Yulianto', 'U0014');
INSERT INTO `tracking` VALUES (1075, 'T201901020070', '2019-01-02 11:10:47', NULL, NULL, NULL, NULL, 'Created Ticket', 'TIKET DI BUAT', 'U0005');
INSERT INTO `tracking` VALUES (1076, 'T201812280069', '2019-01-02 15:05:51', NULL, NULL, NULL, NULL, 'Unsolved', 'dear pak Yulianto,\n\nterlampir codes tgl 28Desember 2018\nhttps://drive.google.com/file/d/1KQmQVK9XU9bbdtdlh5m_bmOTlaF8efoE/view?usp=sharing\n', 'U0008');
INSERT INTO `tracking` VALUES (1077, 'T201901030071', '2019-01-03 15:34:35', NULL, NULL, NULL, NULL, 'Created Ticket', 'TIKET DI BUAT', 'U0008');
INSERT INTO `tracking` VALUES (1078, 'T201901030071', '2019-01-04 08:46:42', NULL, NULL, NULL, NULL, 'Ticket disetujui', 'TICKET DITERIMA VENDOR SUPPORT', 'U0014');
INSERT INTO `tracking` VALUES (1079, 'T201812280069', '2019-01-04 08:53:12', NULL, NULL, NULL, NULL, 'Diproses oleh vendor support', '', 'U0014');
INSERT INTO `tracking` VALUES (1080, 'T201812280069', '2019-01-04 08:54:27', NULL, NULL, NULL, NULL, 'Up Progress To 0 %', 'Dear Pak Heri,\n\nTerlampir ketika saya run source 28 desember di lokal saya, tidak ada kendala. Saya lampirkan screenshootnya.\n\nTerima Kasih\n-Yulianto', 'U0014');
INSERT INTO `tracking` VALUES (1081, 'T201901030071', '2019-01-04 08:56:15', NULL, NULL, NULL, NULL, 'Up Progress To 0 %', 'Dear Pak Heri,\n\nTolong diinfokan detail parameter yang diinputkan ketika print laporannya supaya pembanding nya sama ketika saya cek.\n\nTerima Kasih\n-Yulianto', 'U0014');
INSERT INTO `tracking` VALUES (1082, 'T201901030071', '2019-01-04 10:33:09', NULL, NULL, NULL, NULL, 'Unsolved', 'Dear pak Yulianto, \n@thnsprmulai = \' \'\n@end_date=\'12/31/2018\'\n\nTerima kasih', 'U0008');
INSERT INTO `tracking` VALUES (1083, 'T201901030071', '2019-01-04 10:26:40', NULL, NULL, NULL, NULL, 'Diproses oleh vendor support', '', 'U0014');
INSERT INTO `tracking` VALUES (1084, 'T201901030071', '2019-01-04 10:30:06', NULL, NULL, NULL, NULL, 'Up Progress To 0 %', 'Dear Pak Heri,\n\nSaya cek memang per 31 Des 18 tidak ada data yang masuk aging 61-90. Silahkan bapak coba masukkan tanggal 1 Jan 19, secara data akan ada semua karena baru masuk aging nya ada yang di periode 61-90 days.\n\nSilahkan dicek kembali pak.\n\nTerima Kasih\n-Yulianto', 'U0014');
INSERT INTO `tracking` VALUES (1085, 'T201901020070', '2019-01-04 10:49:27', NULL, NULL, NULL, NULL, 'Ticket disetujui', 'TICKET DITERIMA VENDOR SUPPORT', 'U0014');
INSERT INTO `tracking` VALUES (1086, 'T201901020070', '2019-01-04 10:50:00', NULL, NULL, NULL, NULL, 'Up Progress To 0 %', 'Tolong infokan customer nya siapa, saya cek di lokal dengan database terakhir tidak ada.', 'U0014');
INSERT INTO `tracking` VALUES (1087, 'T201901080072', '2019-01-08 13:11:19', NULL, NULL, NULL, NULL, 'Created Ticket', 'TIKET DI BUAT', 'U0008');
INSERT INTO `tracking` VALUES (1088, 'T201901080072', '2019-01-08 13:18:05', NULL, NULL, NULL, NULL, 'Ticket disetujui', 'TICKET DITERIMA VENDOR SUPPORT', 'U0014');
INSERT INTO `tracking` VALUES (1089, 'T201901080072', '2019-01-08 13:18:52', NULL, NULL, NULL, NULL, 'Up Progress To 0 %', 'Dear pak Heri,\n\nFile report not found. Mohon dicek kembali attachment nya.\n\nTerima Kasih\n-Yulianto', 'U0014');
INSERT INTO `tracking` VALUES (1090, 'T201901080072', '2019-01-08 14:28:51', NULL, NULL, NULL, NULL, 'Unsolved', 'Maaf Pak Yulianto, untuk file di kirim lewat email ya, soal ny format attachment tdk mendukung utk di upload di web ticketing', 'U0008');
INSERT INTO `tracking` VALUES (1091, 'T201901080072', '2019-01-08 13:29:10', NULL, NULL, NULL, NULL, 'Diproses oleh vendor support', '', 'U0014');
INSERT INTO `tracking` VALUES (1092, 'T201901080073', '2019-01-08 17:38:02', NULL, NULL, NULL, NULL, 'Created Ticket', 'TIKET DI BUAT', 'U0008');
INSERT INTO `tracking` VALUES (1093, 'T201901080073', '2019-01-09 09:20:13', NULL, NULL, NULL, NULL, 'Ticket disetujui', 'TICKET DITERIMA VENDOR SUPPORT', 'U0014');
INSERT INTO `tracking` VALUES (1094, 'T201901080073', '2019-01-09 09:21:28', NULL, NULL, NULL, NULL, 'Up Progress To 0 %', 'Dear Pak Heri,\n\nUntuk report nya saya test di lokal saya hanya <=2 second saja pak untuk load report nya.\nAkan saya cek ke server dahulu apakah ada kendala juga dengan server yang menyebebkan kendala tersebut.\n\nTerima Kasih\n-Yulianto', 'U0014');
INSERT INTO `tracking` VALUES (1095, 'T201901080072', '2019-01-09 17:05:06', NULL, NULL, NULL, NULL, 'Up Progress To 100 %', 'Dear Pak Heri,\n\nTerlampir untuk update nya, silahkan diupdate ke server.\nSesuai informasi dari bapak khusus di JC saja button print (1,2,3) di tab print kwitansi OR Auto dijadikan print dengan report yang sama di attachment ticketing ini.\n\nTerima Kasih\n-Yulianto', 'U0014');
INSERT INTO `tracking` VALUES (1096, 'T201901020070', '2019-01-10 15:03:57', NULL, NULL, NULL, NULL, 'Unsolved', 'unit nya QG1 / 036\nnama nya = \"PERUM LEMBAGA PENYELENGGARA PELAYANAN NAVIGASI PENERBANGAN \", kurang kata \"INDONESIA\"', 'U0005');
INSERT INTO `tracking` VALUES (1097, 'T201901020070', '2019-01-10 14:18:11', NULL, NULL, NULL, NULL, 'Diproses oleh vendor support', '', 'U0014');
INSERT INTO `tracking` VALUES (1098, 'T201901100074', '2019-01-10 14:42:38', NULL, NULL, NULL, NULL, 'Created Ticket', 'TIKET DI BUAT', 'U0006');
INSERT INTO `tracking` VALUES (1099, 'T201901100074', '2019-01-10 16:47:41', NULL, NULL, NULL, NULL, 'Ticket disetujui', 'TICKET DITERIMA VENDOR SUPPORT', 'U0014');
INSERT INTO `tracking` VALUES (1100, 'T201901110075', '2019-01-11 15:32:26', NULL, NULL, NULL, NULL, 'Created Ticket', 'TIKET DI BUAT', 'U0005');
INSERT INTO `tracking` VALUES (1101, 'T201901100074', '2019-01-14 09:30:10', NULL, NULL, NULL, NULL, 'Up Progress To 100 %', 'Dear Putri,\n\nTerlampir untuk update filter entity dan project module LA form Sertifikat Induk.\nSIlahkan diupdatekan ke server.\n\nTerima Kasih\n-Yulianto', 'U0014');
INSERT INTO `tracking` VALUES (1108, 'T201901160077', '2019-01-16 13:13:56', NULL, NULL, NULL, NULL, 'Created Ticket', 'TIKET DI BUAT', 'U0006');
INSERT INTO `tracking` VALUES (1109, 'T201901110075', '2019-01-16 13:17:27', NULL, NULL, NULL, NULL, 'Ticket disetujui', 'TICKET DITERIMA VENDOR SUPPORT', 'U0011');
INSERT INTO `tracking` VALUES (1114, 'T201901160077', '2019-01-16 13:50:47', NULL, NULL, NULL, NULL, 'Ticket disetujui', 'TICKET DITERIMA VENDOR SUPPORT', 'U0014');
INSERT INTO `tracking` VALUES (1118, 'T201901160077', '2019-01-16 15:06:46', NULL, NULL, NULL, NULL, 'Up Progress To 100 %', 'Dear bu Putri,\n\nSetelah kami cek untuk request filter desa tidak dapat dilakukan, karena untuk desa hanya ada di SPH, sedangkan header yang dari sertifikat induk tidak link dengan SPH. Alternatif lain nya jika SOP dan inputan data disana hanya mengacu 1 nomor sertifikat induk hanya untuk 1 desa, masih bisa kami lakukan. Namun jika yang terjadi ada lebih dari 1 desa dalam 1 sertifikat induk tidak bisa dilakukan filter.\n\nTerima Kasih\n-Yulianto', 'U0014');
INSERT INTO `tracking` VALUES (1119, 'T201901160079', '2019-01-16 15:36:41', NULL, NULL, NULL, NULL, 'Created Ticket', 'TIKET DI BUAT', 'U0008');
INSERT INTO `tracking` VALUES (1127, 'T201901160079', '2019-01-17 09:27:05', NULL, NULL, NULL, NULL, 'Ticket disetujui', 'TICKET DITERIMA VENDOR SUPPORT', 'U0014');
INSERT INTO `tracking` VALUES (1128, 'T201901160079', '2019-01-17 16:47:55', NULL, NULL, NULL, NULL, 'Up Progress To 0 %', 'Dear Pak Heri,\n\nUntuk hal ini saya cek kenapa muncul inv tanggal 4/4/2018 karena secara data nya yang digunakan adalah nomor yang sudah ada di form SPK Close. Seharusnya jika memang closing nya harusnya diperiode yang lain, dibuatkan data baru pak, jangan menggunakan data lama nya.\nSaya lampirkan capture nya.\n\nTerima Kasih\n-Yulianto', 'U0014');
INSERT INTO `tracking` VALUES (1129, 'T201901180080', '2019-01-18 11:58:46', NULL, NULL, NULL, NULL, 'Created Ticket', 'TIKET DI BUAT', 'U0006');
INSERT INTO `tracking` VALUES (1130, 'T201901180080', '2019-01-18 14:13:33', NULL, NULL, NULL, NULL, 'Ticket disetujui', 'TICKET DITERIMA VENDOR SUPPORT', 'U0014');
INSERT INTO `tracking` VALUES (1131, 'T201901180080', '2019-01-18 14:14:45', NULL, NULL, NULL, NULL, 'Up Progress To 0 %', 'Dear Putri,\n\nmohon dikirimkan template file upload dan download nya dari bank CIMB.\nfile upload berupa csv dan downloadnya bisa berupa file txt.\n\nTerima Kasih\n-Yulianto', 'U0014');
INSERT INTO `tracking` VALUES (1133, 'T201901220081', '2019-01-22 09:47:00', NULL, NULL, NULL, NULL, 'Created Ticket', 'TIKET DI BUAT', 'U0008');
INSERT INTO `tracking` VALUES (1134, 'T201901220076', '2019-01-22 10:15:39', NULL, NULL, NULL, NULL, 'Created Ticket', 'TIKET DI BUAT', 'U0008');
INSERT INTO `tracking` VALUES (1137, 'T201901220082', '2019-01-23 14:02:46', NULL, NULL, NULL, NULL, 'Ticket disetujui', 'TICKET DITERIMA VENDOR SUPPORT', 'U0014');
INSERT INTO `tracking` VALUES (1138, 'T201901220081', '2019-01-23 14:30:14', NULL, NULL, NULL, NULL, 'Ticket disetujui', 'TICKET DITERIMA VENDOR SUPPORT', 'U0014');
INSERT INTO `tracking` VALUES (1139, 'T201901220081', '2019-01-23 14:31:46', NULL, NULL, NULL, NULL, 'Up Progress To 0 %', 'Dear Pak Heri,\n\nIni di source yang mana pak, dengan source terakhir yang ada di saya per tanggal 10 Januari 19 tidak ada masalah.\n\nTerima Kasih\n-Yulianto', 'U0014');
INSERT INTO `tracking` VALUES (1140, 'T201901120076', '2019-01-23 14:45:53', NULL, NULL, NULL, NULL, 'Up Progress To 100 %', 'Dear Pak Heri,\n\nTerlampir untuk file update nya. SIlahkan bisa diupdate kan ke server.\n\nTerima Kasih\n-Yulianto', 'U0014');
INSERT INTO `tracking` VALUES (1141, 'T201901160079', '2019-01-25 09:36:10', NULL, NULL, NULL, NULL, 'Up Progress To 100 %', '', 'U0014');
INSERT INTO `tracking` VALUES (1142, 'T201901220081', '2019-01-25 09:36:23', NULL, NULL, NULL, NULL, 'Up Progress To 100 %', '', 'U0014');
INSERT INTO `tracking` VALUES (1143, 'T201901160078', '2019-01-25 16:11:00', NULL, NULL, NULL, NULL, 'Created Ticket', 'TIKET DI BUAT', 'U0008');
INSERT INTO `tracking` VALUES (1145, 'T201901300082', '2019-01-30 09:17:15', NULL, NULL, NULL, NULL, 'Created Ticket', 'TIKET DI BUAT', 'U0005');
INSERT INTO `tracking` VALUES (1146, 'T201901020070', '2019-01-30 17:17:56', NULL, NULL, NULL, NULL, 'Up Progress To 100 %', 'Terlampir update untuk penambahan panjang kolom nama.\n\nNote : Tolong update dahulu sebelum update yang Virtual Account.', 'U0014');
INSERT INTO `tracking` VALUES (1147, 'T201901160077', '2019-01-30 17:18:25', NULL, NULL, NULL, NULL, 'Up Progress To 100 %', '', 'U0014');
INSERT INTO `tracking` VALUES (1148, 'T201901180080', '2019-01-30 17:22:05', NULL, NULL, NULL, NULL, 'Up Progress To 100 %', 'Terlampir update untuk VA nya, silahkan diupdatekan ke server.\n\nNote Mohon diperhatikan :\n1. Update VA ini setelah update untuk request penambahan panjang kolom nama / koordinasi dengan bu Hanny yang request penambahan.\n2. Debtor VA untuk yang sudah dibuat dengan kode bank CIMB harus diubah ke CIM.\n3. File download dari bank, untuk header yang berwarna abu-abu dan beruliskan VIRTUAL ACCOUNT mohon dihapus, jika tidak sistem akan memberikan notif error karena tidak dikenali. Yang dibaca sistem hanya header kolom dan record data nya saja.\n\nTerima Kasih', 'U0014');
INSERT INTO `tracking` VALUES (1149, 'T201901300083', '2019-01-30 18:13:13', NULL, NULL, NULL, NULL, 'Created Ticket', 'TIKET DI BUAT', 'U0008');
INSERT INTO `tracking` VALUES (1151, 'T201902010084', '2019-02-01 16:52:15', NULL, NULL, NULL, NULL, 'Created Ticket', 'TIKET DI BUAT', 'U0006');
INSERT INTO `tracking` VALUES (1152, 'T201902070085', '2019-02-07 14:24:12', NULL, NULL, NULL, NULL, 'Created Ticket', 'TIKET DI BUAT', 'U0006');
INSERT INTO `tracking` VALUES (1154, 'T201901160078', '2019-02-20 11:40:06', NULL, NULL, NULL, NULL, 'Ticket disetujui', 'TICKET DITERIMA VENDOR SUPPORT', 'U0011');
INSERT INTO `tracking` VALUES (1155, 'T201901300082', '2019-02-20 11:40:11', NULL, NULL, NULL, NULL, 'Ticket disetujui', 'TICKET DITERIMA VENDOR SUPPORT', 'U0011');
INSERT INTO `tracking` VALUES (1160, 'T201902210086', '2019-02-21 11:10:48', NULL, NULL, NULL, NULL, 'Created Ticket', 'TIKET DI BUAT', 'U0008');
INSERT INTO `tracking` VALUES (1161, 'T201902210086', '2019-02-22 13:46:13', NULL, NULL, NULL, NULL, 'Ticket disetujui', 'TICKET DITERIMA VENDOR SUPPORT', 'U0011');
INSERT INTO `tracking` VALUES (1162, 'T201902210086', '2019-02-22 13:50:40', NULL, NULL, NULL, NULL, 'Up Progress To 0 %', 'Pak Heri,\n\nUntuk case ini setelah saya cek settingan master tax nya, sepertinya ada settingan yang belum lengkap pak.\nCek Lampiran.\n\nThanks\nHotniel Silaen', 'U0011');
INSERT INTO `tracking` VALUES (1163, 'T201902260087', '2019-02-26 14:16:08', NULL, NULL, NULL, NULL, 'Created Ticket', 'TIKET DI BUAT', 'U0008');
INSERT INTO `tracking` VALUES (1164, 'T201903040088', '2019-03-04 14:32:57', NULL, NULL, NULL, NULL, 'Created Ticket', 'TIKET DI BUAT', 'U0008');
INSERT INTO `tracking` VALUES (1165, 'T201902070085', '2019-03-05 16:49:14', NULL, NULL, NULL, NULL, 'Ticket disetujui', 'TICKET DITERIMA VENDOR SUPPORT', 'U0014');
INSERT INTO `tracking` VALUES (1166, 'T201902070085', '2019-03-05 16:50:42', NULL, NULL, NULL, NULL, 'Up Progress To 100 %', 'Dear Putri,\n\nMohon untuk bisa menyertakan detail dari mana di print nya. Dan saya infokan plugin irfan view bukan dan tidak ada kaitannya dengan sistem AST.\n\nTerima Kasih\n-Yulianto', 'U0014');
INSERT INTO `tracking` VALUES (1167, 'T201902210086', '2019-03-06 11:05:28', NULL, NULL, NULL, NULL, 'Up Progress To 100 %', 'Sudah bisa di proses.', 'U0011');
INSERT INTO `tracking` VALUES (1168, 'T201901300082', '2019-03-06 11:30:16', NULL, NULL, NULL, NULL, 'Up Progress To 100 %', 'No terlampir sudah tidak di temukan di system.', 'U0011');
INSERT INTO `tracking` VALUES (1169, 'T201903040088', '2019-03-06 15:17:22', NULL, NULL, NULL, NULL, 'Ticket disetujui', 'TICKET DITERIMA VENDOR SUPPORT', 'U0011');
INSERT INTO `tracking` VALUES (1170, 'T201903040088', '2019-03-06 15:21:07', NULL, NULL, NULL, NULL, 'Up Progress To 0 %', 'Dear Pak heri, maksudnya apa ya pak?? sudah di serah terima, mohon di jelaskan prosesnya karena jika di cek danyanya masih ada di ownership untuk database yang di upload ke kami.\n\ndan jika ingin capture program yang error mohon tampilkan juga semuanya tidak apa2 pak karena kami butuh untuk project, entity dan fom mana jika memang error untuk memudahkan pencarian kasus tidak tebak-tebak entity, project dan formnya.\n\nThx.\nNoksmo', 'U0011');
INSERT INTO `tracking` VALUES (1171, 'T201902260087', '2019-03-06 15:54:31', NULL, NULL, NULL, NULL, 'Ticket disetujui', 'TICKET DITERIMA VENDOR SUPPORT', 'U0014');
INSERT INTO `tracking` VALUES (1172, 'T201902260087', '2019-03-06 16:02:49', NULL, NULL, NULL, NULL, 'Up Progress To 100 %', 'Dear Pak Heri,\n\nSilahkan diupdate dengan script berikut,\n\n 1. delete xd_retensi_ledger where spk_no=\'MS/CT/18/08/00005\'\n 2. INSERT INTO [xd_retensi_ledger_md] ([entity_cd],[project_no],[spk_no],[tot_amt],[alloc_amt],[bal_amt])\n VALUES(\'MSM\',\'MS\',\'MS/CT/18/08/00005\',5.00,0.00,5.00)\n\nTerima Kasih\n-Yulianto', 'U0014');
INSERT INTO `tracking` VALUES (1173, 'T201902010084', '2019-03-06 16:16:54', NULL, NULL, NULL, NULL, 'Ticket disetujui', 'TICKET DITERIMA VENDOR SUPPORT', 'U0011');
INSERT INTO `tracking` VALUES (1174, 'T201902070085', '2019-03-06 17:02:31', NULL, NULL, NULL, NULL, 'Up Progress To 100 %', 'Dear Putri,\n\nUntuk hal ini saya infokan;\n1. Error tersebut bukan karena kendala di sistem AST.\n2. Set default untuk open file PDF nya ubah dari yang saat ini irfan view ke PDF app yang lain (adobe reader).\n\nKami sudah cek dan memang kendalanya ada di PC user yang membuka file nya default ke irfan view. Di kami default ke adobe atau nitro tidak ada kendala.\n\nDemikiain info dari saya.\n\nTerima Kasih\n-Yulianto', 'U0014');
INSERT INTO `tracking` VALUES (1175, 'T201901300083', '2019-03-06 17:02:47', NULL, NULL, NULL, NULL, 'Ticket disetujui', 'TICKET DITERIMA VENDOR SUPPORT', 'U0014');
INSERT INTO `tracking` VALUES (1176, 'T201903040088', '2019-03-06 18:15:10', NULL, NULL, NULL, NULL, 'Feedback User ', 'Dear Pak Noksmo, sory, saat ini saya pakai AST utk entity MDL project JGC, bukan Kota Modern, untuk unit C2/6 A.n. Hioe Jo Ri sudah serah terima pada tgl  26/02/2019, debtor sudah terbentuk, tapi kenapa pada saat mau pembuatan billing, debtor tsb tidak ada di form ownership ( tidak ada di pm_tenancy).', 'U0008');
INSERT INTO `tracking` VALUES (1177, 'T201902010084', '2019-03-06 17:17:05', NULL, NULL, NULL, NULL, 'Up Progress To 0 %', 'Dear Putri, berikut terlampir update untuk invoice manual. U\nntuk saat ini nilai invoice sudah di tambah dengan pajak bukan hanya base amount, karna field invoice di detil awalnya memang berisi base amount, jadi sekarang trx amount= invoice (termasuk pajak)\n\nThx.', 'U0011');
INSERT INTO `tracking` VALUES (1178, 'T201903040088', '2019-03-08 11:32:41', NULL, NULL, NULL, NULL, 'Up Progress To 0 %', 'Dear Pak Heri, untuk debtor c2/6 di entitas MDL itu dari database terakhir yang kami terima, tidak muncul di form serah terima unit karena ada tagihan yang belum di luna si di ar_ledger, dan tidak bisa di serah terimakan dan tidak bisa berlanjut ke proses ownership. Lalu saya coba ke unit \'G2 / 003\' yang sudah tidak ada tagihan lagi, saya coba approve serah terima dan berhasil terbentuk di form ownership (pm_tenancy) dengan owner no \'G2 / 003/O\' ,dari QC yang saya lakukan tidak ada masalah di form ini.\n\nThx', 'U0011');
INSERT INTO `tracking` VALUES (1179, 'T201901160078', '2019-03-08 11:38:49', NULL, NULL, NULL, NULL, 'Up Progress To 0 %', 'Dear Pak heri, maksudnya apa ya pak??  capture program yang error mohon tampilkan juga semuanya tidak apa2 pak karena kami butuh untuk project, entity dan fom mana jika memang error untuk memudahkan pencarian kasus tidak tebak-tebak entity, project dan formnya. \n\nsaya mohon kolom deskripsi bugs dapat di perjelas.\n\nThx.\nNoksmo', 'U0011');
INSERT INTO `tracking` VALUES (1180, 'T201903040088', '2019-03-08 16:23:15', NULL, NULL, NULL, NULL, 'Feedback User ', 'Dear Pak Noksmo,\nitu database perkapan ya pak noksmo? unit C2/6 sudah input PPJB serta dilunasi pada bulan oktober dan sudah di serah terima pada bulan februari, dalam hal ini debtor ownership C2/6/O sudah terbentuk yang artinya sudah melalui proses serah terima di system , tapi pada saat mau membuat schedule billing di ownership, nama tersebut tidak ada. \nMohon informasi nya.\nTerima kasih', 'U0008');
INSERT INTO `tracking` VALUES (1181, 'T201903040088', '2019-03-11 09:08:28', NULL, NULL, NULL, NULL, 'Up Progress To 0 %', 'Sesuai dengan database yan di kirimkan dari pihak papak pak, terakhit tidak ada yang lain.\nThx', 'U0011');
INSERT INTO `tracking` VALUES (1182, 'T201903040088', '2019-03-12 12:21:36', NULL, NULL, NULL, NULL, 'Feedback User ', 'jadi bagaimana solusi nya pak Noksmo, unit masih belum muncul di form ownership, mau di serah terima kembali jg tidak muncul di form serah terima.', 'U0008');
INSERT INTO `tracking` VALUES (1183, 'T201901160078', '2019-03-12 12:22:50', NULL, NULL, NULL, NULL, 'Feedback User ', 'ini sudah solved , masalah di view', 'U0008');
INSERT INTO `tracking` VALUES (1184, 'T201903040088', '2019-03-12 13:33:51', NULL, NULL, NULL, NULL, 'Up Progress To 0 %', 'BERIKUT TERLAMPIR DATA MBAL_AMT PADA NO :JC/BM/18/10/00221\nada kemungkinan data ini blm di alokasikan semua, mengakibatkan data tidak bsa di serahterimakan.\n\nsilahkan di berbaiki terlebih dahulu', 'U0011');
INSERT INTO `tracking` VALUES (1185, 'T201903040088', '2019-03-12 13:45:50', NULL, NULL, NULL, NULL, 'Up Progress To 0 %', 'Berikut jg terlampir update form untuk filter entity project.\nthx', 'U0011');
INSERT INTO `tracking` VALUES (1186, 'T201901160078', '2019-03-12 13:46:50', NULL, NULL, NULL, NULL, 'Up Progress To 100 %', '', 'U0011');
INSERT INTO `tracking` VALUES (1187, 'T201903040088', '2019-03-12 15:10:18', NULL, NULL, NULL, NULL, 'Feedback User ', 'Oke pak Noksmo, untuk update view ny tolong di upload ulang dengan format zip atau rar, karena web tidak support 7zip, terima kasih', 'U0008');
INSERT INTO `tracking` VALUES (1188, 'T201903040088', '2019-03-12 14:48:27', NULL, NULL, NULL, NULL, 'Up Progress To 0 %', 'terlampir update filter', 'U0011');
INSERT INTO `tracking` VALUES (1189, 'T201903130089', '2019-03-13 08:30:23', NULL, NULL, NULL, NULL, 'Created Ticket', 'TIKET DI BUAT', 'U0008');
INSERT INTO `tracking` VALUES (1190, 'T201903190090', '2019-03-19 17:20:01', NULL, NULL, NULL, NULL, 'Created Ticket', 'TIKET DI BUAT', 'U0006');
INSERT INTO `tracking` VALUES (1191, 'T201903200091', '2019-03-20 14:59:22', NULL, NULL, NULL, NULL, 'Created Ticket', 'TIKET DI BUAT', 'U0006');
INSERT INTO `tracking` VALUES (1192, 'T201903210092', '2019-03-21 12:34:42', NULL, NULL, NULL, NULL, 'Created Ticket', 'TIKET DI BUAT', 'U0002');
INSERT INTO `tracking` VALUES (1193, 'T201903210092', '2019-03-21 12:43:24', NULL, NULL, NULL, NULL, 'Ticket disetujui', 'TICKET DITERIMA VENDOR SUPPORT', 'U0016');
INSERT INTO `tracking` VALUES (1194, 'T201902010084', '2019-03-21 14:03:26', NULL, NULL, NULL, NULL, 'Feedback User ', 'tolong di completed. terimakasih.', 'U0006');
INSERT INTO `tracking` VALUES (1195, 'T201903200091', '2019-03-21 13:36:37', NULL, NULL, NULL, NULL, 'Ticket disetujui', 'TICKET DITERIMA VENDOR SUPPORT', 'U0014');
INSERT INTO `tracking` VALUES (1196, 'T201903200091', '2019-03-21 13:38:21', NULL, NULL, NULL, NULL, 'Up Progress To 0 %', 'Dear Bu Putri,\n\nMaksud dari status bebas ini apa ya? apakah tanpa status, dan data sudah di save kolomnya otomatis terkunci atau bagaimana?\nMohon informasi detailnya.\n\nTerima Kasih\n-Yulianto', 'U0014');
INSERT INTO `tracking` VALUES (1197, 'T201902010084', '2019-03-21 13:44:14', NULL, NULL, NULL, NULL, 'Up Progress To 100 %', '', 'U0011');
INSERT INTO `tracking` VALUES (1198, 'T201903190090', '2019-03-21 13:46:58', NULL, NULL, NULL, NULL, 'Ticket disetujui', 'TICKET DITERIMA VENDOR SUPPORT', 'U0011');
INSERT INTO `tracking` VALUES (1199, 'T201903190090', '2019-03-21 13:50:10', NULL, NULL, NULL, NULL, 'Up Progress To 0 %', 'Dear Bu Putri,\n\nPenambahan panjang kolom ini di sisi mana nya, karena kolom informasi SPH ada banyak detail nya. Tolong dicapture dengan jelas form yang dimana nya.\n\nTerima Kasih\n-Yulianto', 'U0011');
INSERT INTO `tracking` VALUES (1200, 'T201903130089', '2019-03-21 13:58:31', NULL, NULL, NULL, NULL, 'Ticket disetujui', 'TICKET DITERIMA VENDOR SUPPORT', 'U0011');
INSERT INTO `tracking` VALUES (1201, 'T201903130089', '2019-03-21 13:59:18', NULL, NULL, NULL, NULL, 'Up Progress To 0 %', 'Dear Pak Heri,\n\nTolong bisa dikirimkan database nya pak, dan ini data di lokal bapak atau di live?\n\nTerima Kasih\n-Yulianto', 'U0011');
INSERT INTO `tracking` VALUES (1202, 'T201903210093', '2019-03-21 15:01:23', NULL, NULL, NULL, NULL, 'Created Ticket', 'TIKET DI BUAT', 'U0005');
INSERT INTO `tracking` VALUES (1203, 'T201903190090', '2019-03-21 18:33:38', NULL, NULL, NULL, NULL, 'Feedback User ', 'untuk header no.SPH kolomnya di perpanjang. berikut saya lampirkan gambarnya.', 'U0006');
INSERT INTO `tracking` VALUES (1204, 'T201903200091', '2019-03-21 18:37:42', NULL, NULL, NULL, NULL, 'Feedback User ', 'untuk status pembebasan, saat berubah menjadi bebas luas tanah dan harga tanah /m2 untuk dikunci. karena saat status sudah bebas maka nilai harga tanah dan luas tanah tidak bisa dirubah lagi.', 'U0006');
INSERT INTO `tracking` VALUES (1205, 'T201903130089', '2019-03-21 18:44:17', NULL, NULL, NULL, NULL, 'Feedback User ', 'Dear Pak Yulianto, ini di live pak, terlampir url untuk download db \n\nhttps://drive.google.com/file/d/1QfYiNz2OQm5MNRLUWexMh2XjIjSilf-U/view?usp=sharing\n\nTerima kasih.', 'U0008');
INSERT INTO `tracking` VALUES (1206, 'T201901110075', '2019-04-01 10:34:38', NULL, NULL, NULL, NULL, 'Up Progress To 100 %', 'Dear Hanny,\n\nBerikut update untuk case ini.\n\nThanks\nHotniel Silaen', 'U0011');
INSERT INTO `tracking` VALUES (1207, 'T201903210093', '2019-04-01 11:06:29', NULL, NULL, NULL, NULL, 'Ticket disetujui', 'TICKET DITERIMA VENDOR SUPPORT', 'U0011');
INSERT INTO `tracking` VALUES (1208, 'T201903210093', '2019-04-01 11:07:20', NULL, NULL, NULL, NULL, 'Up Progress To 0 %', 'Dear Hanny,\n\nBisa minta database terbaru nya?\nSoalnya case ini lebih karena datanya.\n\nThanks\nHotniel Silaen', 'U0011');
INSERT INTO `tracking` VALUES (1209, 'T201904040094', '2019-04-04 11:55:20', NULL, NULL, NULL, NULL, 'Created Ticket', 'TIKET DI BUAT', 'U0005');
INSERT INTO `tracking` VALUES (1210, 'T201904040094', '2019-04-04 14:01:43', NULL, NULL, NULL, NULL, 'Ticket disetujui', 'TICKET DITERIMA VENDOR SUPPORT', 'U0011');
INSERT INTO `tracking` VALUES (1211, 'T201904040094', '2019-04-04 14:02:19', NULL, NULL, NULL, NULL, 'Up Progress To 0 %', 'Dear Hanny,\n\nTerlampir update untuk case ini.\n\nThanks\nHotniel Silaen', 'U0011');
INSERT INTO `tracking` VALUES (1212, 'T201903210092', '2019-04-04 14:27:18', NULL, NULL, NULL, NULL, 'Up Progress To 0 %', 'tes', 'U0016');
INSERT INTO `tracking` VALUES (1213, 'T201903210092', '2019-04-05 10:22:45', '2019-04-12', NULL, NULL, NULL, 'Up Progress To 0 %', 'tes1', 'U0016');
INSERT INTO `tracking` VALUES (1214, 'T201904080095', '2019-04-08 15:28:08', NULL, NULL, NULL, NULL, 'Created Ticket', 'TIKET DI BUAT', 'U0005');
INSERT INTO `tracking` VALUES (1215, 'T201904240096', '2019-04-24 17:23:55', NULL, NULL, NULL, NULL, 'Created Ticket', 'TIKET DI BUAT', 'U0006');
INSERT INTO `tracking` VALUES (1216, 'T201904240097', '2019-04-24 17:27:09', NULL, NULL, NULL, NULL, 'Created Ticket', 'TIKET DI BUAT', 'U0006');
INSERT INTO `tracking` VALUES (1219, 'T201904250098', '2019-04-25 16:40:09', NULL, NULL, NULL, NULL, 'Created Ticket', 'TIKET DI BUAT', 'U0005');
INSERT INTO `tracking` VALUES (1220, 'T201903130089', '2019-04-26 12:36:34', '2019-04-26', 0, 0, 0, 'Up Progress To 100 %', 'Dear Pak Heri,\n\nTerlampir untuk update form Retensi SPK. Silahkan diupdate ke server.\nUntuk case yang sudah terjadi bisa diubah langsung di invoice entry nya pak sesuai dengan yang sudah kita diskusikan via whatsapp hari ini jumat 26 april 2019.\n\nTerima Kasih\n-Yulianto', 'U0011');
INSERT INTO `tracking` VALUES (1221, 'T201903190090', '2019-04-26 12:46:48', '2019-04-26', 0, 0, 0, 'Up Progress To 0 %', 'Dear Bu Putri,\n\nTerlampir file update untuk perpanjang kolom SPH Entry nya.\nSilahkan dicek kembali.\n\nTerima Kasih\n-Yulianto', 'U0011');
INSERT INTO `tracking` VALUES (1222, 'T201903190090', '2019-04-26 15:25:54', NULL, NULL, NULL, NULL, 'Feedback User ', 'Dear Team AST, untuk update case ini mohon ditambahkan panjang karakter no SPH menjadi 50.\nTerima kasih.', 'U0006');
INSERT INTO `tracking` VALUES (1223, 'T201903190090', '2019-04-26 16:34:24', '2019-04-26', 0, 0, 0, 'Up Progress To 100 %', 'Dear Bu Putri,\n\nTerlampir update untuk penambahan panjang kolom di DB dan sistem.\nMohon untuk kedepan deskripsi di ticketing nya bisa lebih diperjelas, kolom secara tampilan atau secara database nya juga.\n\nTerima Kasih\n-Yulianto', 'U0011');
INSERT INTO `tracking` VALUES (1224, 'T201904240096', '2019-04-26 16:36:50', NULL, NULL, NULL, NULL, 'Ticket tidak disetujui', '', 'U0011');
INSERT INTO `tracking` VALUES (1225, 'T201904240096', '2019-04-26 16:37:13', NULL, NULL, NULL, NULL, 'Ticket dikembalikan ke posisi belum di setujui', '', 'U0011');
INSERT INTO `tracking` VALUES (1226, 'T201904240096', '2019-04-26 16:37:18', NULL, NULL, NULL, NULL, 'Ticket tidak disetujui', '', 'U0011');
INSERT INTO `tracking` VALUES (1227, 'T201904290099', '2019-04-29 11:22:41', NULL, NULL, NULL, NULL, 'Created Ticket', 'TIKET DI BUAT', 'U0006');
INSERT INTO `tracking` VALUES (1228, 'T201904290100', '2019-04-29 13:41:24', NULL, NULL, NULL, NULL, 'Created Ticket', 'TIKET DI BUAT', 'U0005');
INSERT INTO `tracking` VALUES (1229, 'T201904290101', '2019-04-29 16:33:56', NULL, NULL, NULL, NULL, 'Created Ticket', 'TIKET DI BUAT', 'U0005');
INSERT INTO `tracking` VALUES (1230, 'T201904080095', '2019-04-30 10:53:20', NULL, NULL, NULL, NULL, 'Ticket disetujui', 'TICKET DITERIMA VENDOR SUPPORT', 'U0014');
INSERT INTO `tracking` VALUES (1231, 'T201904080095', '2019-04-30 10:59:37', '2019-04-30', 0, 0, 0, 'Up Progress To 0 %', 'Dear Bu Hanny,\n\nUntuk counter doc no selama tidak ada yang melakukan perubahan data atau tembak no doc tidak akan bisa mundur sendiri. Mohon untuk hal ini dicegah dengan hak akses untuk form tersebut dibatasi hanya user tertentu yang diberikan akses.\n\nTerima Kasih\nYulianto', 'U0014');
INSERT INTO `tracking` VALUES (1232, 'T201904240096', '2019-04-30 11:00:02', NULL, NULL, NULL, NULL, 'Ticket dikembalikan ke posisi belum di setujui', '', 'U0014');
INSERT INTO `tracking` VALUES (1233, 'T201904240096', '2019-04-30 11:01:09', NULL, NULL, NULL, NULL, 'Ticket disetujui', 'TICKET DITERIMA VENDOR SUPPORT', 'U0014');
INSERT INTO `tracking` VALUES (1234, 'T201904290099', '2019-04-30 11:02:48', NULL, NULL, NULL, NULL, 'Ticket disetujui', 'TICKET DITERIMA VENDOR SUPPORT', 'U0014');
INSERT INTO `tracking` VALUES (1235, 'T201901300083', '2019-04-30 16:28:46', '2019-04-30', 0, 0, 0, 'Up Progress To 100 %', 'Dear Pak Heri,\n\nTerlampir untuk update nya, silahkan bisa dicek kembali.\n\nTerima Kasih\n-Yulianto', 'U0014');
INSERT INTO `tracking` VALUES (1236, 'T201905020102', '2019-05-02 14:08:09', NULL, NULL, NULL, NULL, 'Created Ticket', 'TIKET DI BUAT', 'U0005');
INSERT INTO `tracking` VALUES (1238, 'T201905030103', '2019-05-03 15:31:47', NULL, NULL, NULL, NULL, 'Created Ticket', 'TIKET DI BUAT', 'U0002');
INSERT INTO `tracking` VALUES (1239, 'T201905060104', '2019-05-06 13:21:16', NULL, NULL, NULL, NULL, 'Created Ticket', 'TIKET DI BUAT', 'U0006');
INSERT INTO `tracking` VALUES (1240, 'T201905060104', '2019-05-06 13:37:47', NULL, NULL, NULL, NULL, 'Ticket disetujui', 'TICKET DITERIMA VENDOR SUPPORT', 'U0014');
INSERT INTO `tracking` VALUES (1241, 'T201905030103', '2019-05-06 13:37:52', NULL, NULL, NULL, NULL, 'Ticket disetujui', 'TICKET DITERIMA VENDOR SUPPORT', 'U0014');
INSERT INTO `tracking` VALUES (1242, 'T201905030103', '2019-05-06 13:38:09', '2019-05-06', 0, 0, 0, 'Up Progress To 100 %', 'OK', 'U0014');
INSERT INTO `tracking` VALUES (1243, 'T201901110075', '2019-05-06 16:14:18', '2019-05-06', 0, 0, 0, 'Up Progress To 100 %', '', 'U0011');
INSERT INTO `tracking` VALUES (1244, 'T201905060104', '2019-05-07 11:33:00', '2019-05-07', 0, 0, 0, 'Up Progress To 100 %', 'Dear Putri,\n\nMohon diupdate untuk form SPK Progress Direct dengan update berikut. Lalu untuk SPK Progress PS/CT/17/08/00002 diunpost dahulu lalu proggres yang tanggal 18/04/2019 dihapus, add ulang supaya refresh utnuk activity nya.\n\nTerima Kasih\n-Yulianto', 'U0014');
INSERT INTO `tracking` VALUES (1245, 'T201905070105', '2019-05-07 15:05:49', NULL, NULL, NULL, NULL, 'Created Ticket', 'TIKET DI BUAT', 'U0008');
INSERT INTO `tracking` VALUES (1246, 'T201905130106', '2019-05-13 13:19:15', NULL, NULL, NULL, NULL, 'Created Ticket', 'TIKET DI BUAT', 'U0008');
INSERT INTO `tracking` VALUES (1247, 'T201904250098', '2019-05-15 09:29:34', NULL, NULL, NULL, NULL, 'Ticket disetujui', 'TICKET DITERIMA VENDOR SUPPORT', 'U0011');
INSERT INTO `tracking` VALUES (1248, 'T201904290100', '2019-05-15 09:29:40', NULL, NULL, NULL, NULL, 'Ticket disetujui', 'TICKET DITERIMA VENDOR SUPPORT', 'U0011');
INSERT INTO `tracking` VALUES (1249, 'T201904250098', '2019-05-15 09:30:38', '2019-05-15', 0, 0, 0, 'Up Progress To 100 %', 'Untuk case ini sudah dijelaskan via Whatsapp.\nHal ini karena interest penalty nya belum di generate.\n\nThanks\nHotniel Silaen', 'U0011');
INSERT INTO `tracking` VALUES (1250, 'T201904290100', '2019-05-15 09:31:16', '2019-05-15', 0, 0, 0, 'Up Progress To 100 %', 'Untuk case ini sudah di kirim update nya via email.\n\nThanks\nHotniel Silaen', 'U0011');
INSERT INTO `tracking` VALUES (1251, 'T201905130106', '2019-05-15 09:31:45', NULL, NULL, NULL, NULL, 'Ticket disetujui', 'TICKET DITERIMA VENDOR SUPPORT', 'U0011');
INSERT INTO `tracking` VALUES (1252, 'T201905130106', '2019-05-15 09:32:33', '2019-05-15', 0, 0, 0, 'Up Progress To 0 %', 'Dear Heri,\n\nUntuk case ini, mohon di lampirkan kembali file gambar nya.\nKarena file yang sekarang tidak bisa di buka.\n\nThanks\nHotniel Silaen', 'U0011');
INSERT INTO `tracking` VALUES (1253, 'T201905130106', '2019-05-16 08:39:14', NULL, NULL, NULL, NULL, 'Feedback User ', '', 'U0008');
INSERT INTO `tracking` VALUES (1254, 'T201903210092', '2019-05-16 08:50:01', NULL, NULL, NULL, NULL, 'Feedback User ', 'No komen', 'U0002');
INSERT INTO `tracking` VALUES (1255, 'T201903210092', '2019-05-16 08:53:45', '2019-06-16', NULL, NULL, NULL, 'Up Progress To 0 %', 'tes', 'U0016');
INSERT INTO `tracking` VALUES (1256, 'T201903210092', '2019-05-17 15:35:30', '2019-05-17', NULL, NULL, NULL, 'Up Progress To 0 %', 'tes', 'U0016');
INSERT INTO `tracking` VALUES (1257, 'T201903210092', '2019-05-17 16:08:39', '2019-05-17', NULL, NULL, NULL, 'Up Progress To 0 %', 'test', 'U0016');
INSERT INTO `tracking` VALUES (1258, 'T201903210092', '2019-05-17 16:15:24', '2019-05-17', NULL, NULL, NULL, 'Up Progress To 0 %', 'test', 'U0016');
INSERT INTO `tracking` VALUES (1259, 'T201903210092', '2019-05-17 16:18:53', '2019-05-17', NULL, NULL, NULL, 'Up Progress To 0 %', 'test', 'U0016');
INSERT INTO `tracking` VALUES (1260, 'T201903210092', '2019-05-23 12:13:31', '2019-05-23', NULL, NULL, NULL, 'Up Progress To 0 %', 'tes gambar', 'U0016');
INSERT INTO `tracking` VALUES (1261, 'T201905270107', '2019-05-27 14:51:50', NULL, NULL, NULL, NULL, 'Created Ticket', 'TIKET DI BUAT', 'U0008');
INSERT INTO `tracking` VALUES (1262, 'T201903210092', '2019-05-29 09:40:21', '2019-05-29', NULL, NULL, NULL, 'Up Progress To 0 %', '', 'U0016');
INSERT INTO `tracking` VALUES (1263, 'T201903210092', '2019-05-29 09:41:22', '2019-05-29', NULL, NULL, NULL, 'Up Progress To 0 %', 'ok', 'U0016');
INSERT INTO `tracking` VALUES (1264, 'T201903210092', '2019-05-29 09:42:14', NULL, NULL, NULL, NULL, 'Feedback User ', 'Coba lagi', 'U0002');
INSERT INTO `tracking` VALUES (1266, 'T201905070105', '2019-06-10 10:07:41', NULL, NULL, NULL, NULL, 'Ticket disetujui', 'TICKET DITERIMA VENDOR SUPPORT', 'U0014');
INSERT INTO `tracking` VALUES (1267, 'T201905070105', '2019-06-10 10:12:20', '2019-06-10', 0, 0, 0, 'Up Progress To 100 %', 'Dear Pak Heri,\n\nBerikut terlampir update untuk menghindari case perbedaan antara nilai close SPK terhadap sisa retensi, yang mana setelah dicek lebih lanjut hal ini bermula dari adanya SPK yang sudah ada addendum nya namun SPK tersebut masih bisa diubah nilai / unpost. Sehingga nilai yang ada di addendum tidak sama dengan nilai di SPK nya (secara nilai per activity nya).\nDengan ada nya update ini dikunci jika memang sudah ada addendum, maka SPK tidak dapat diubah / unpost. Harus melalui hapus addendum dan dibuat ulang addendum nya supaya nilainya sama dengan SPK yang baru.\n\nTerima Kasih\n-Yulianto', 'U0014');
INSERT INTO `tracking` VALUES (1268, 'T201906190108', '2019-06-19 09:59:51', NULL, NULL, NULL, NULL, 'Created Ticket', 'TIKET DI BUAT', 'U0006');
INSERT INTO `tracking` VALUES (1269, 'T201905030103', '2019-06-20 09:45:15', '2019-06-20', 0, 0, 0, 'Up Progress To 100 %', 'ok', 'U0014');
INSERT INTO `tracking` VALUES (1270, 'T201906190108', '2019-06-20 09:45:49', NULL, NULL, NULL, NULL, 'Ticket disetujui', 'TICKET DITERIMA VENDOR SUPPORT', 'U0014');
INSERT INTO `tracking` VALUES (1271, 'T201906190108', '2019-06-20 09:45:49', NULL, NULL, NULL, NULL, 'Ticket disetujui', 'TICKET DITERIMA VENDOR SUPPORT', 'U0014');
INSERT INTO `tracking` VALUES (1272, 'T201906190108', '2019-06-20 09:46:48', '2019-06-20', 0, 0, 0, 'Up Progress To 0 %', 'Dear Bu Putri,\n\nTolong kirimkan db dan source terakhir nya via email ke support ya.\n\nTerima Kasih\n-Yulianto', 'U0014');
INSERT INTO `tracking` VALUES (1273, 'T201905030103', '2019-06-20 09:47:16', '2019-06-20', 0, 0, 0, 'Up Progress To 100 %', '', 'U0014');
INSERT INTO `tracking` VALUES (1274, 'T201904290099', '2019-06-20 11:38:27', '2019-06-20', 0, 0, 0, 'Up Progress To 100 %', 'Dear Bu Putri,\n\nUntuk hal ini saya rasa sudah diupdate dengan menggunakan button approval seperti yang terakhir dimeetingkan dengan Pak Hotniel dan Pak Wawan. Dan hal ini sudah ada update di form terlampir capture nya.\n\nTerima Kasih\n-Yulianto', 'U0014');
INSERT INTO `tracking` VALUES (1275, 'T201904290101', '2019-06-20 11:45:44', NULL, NULL, NULL, NULL, 'Ticket disetujui', 'TICKET DITERIMA VENDOR SUPPORT', 'U0014');
INSERT INTO `tracking` VALUES (1276, 'T201904290101', '2019-06-20 11:47:16', '2019-06-20', 0, 0, 0, 'Up Progress To 100 %', 'Dear Bu Hanny,\n\nTolong bisa dicek kembali untuk print nya, Saya coba dengan database dan source per tanggal 20 Juni 2019 tidak ada kendala untuk kasus yang disampaikan dengan nomor yang sama.\nTerlampir capture nya dari form dan print out nya.\n\nTerima Kasih\n-Yulianto', 'U0014');
INSERT INTO `tracking` VALUES (1277, 'T201905020102', '2019-06-20 11:49:30', NULL, NULL, NULL, NULL, 'Ticket disetujui', 'TICKET DITERIMA VENDOR SUPPORT', 'U0014');
INSERT INTO `tracking` VALUES (1278, 'T201905020102', '2019-06-20 11:50:58', '2019-06-20', 0, 0, 0, 'Up Progress To 100 %', 'Dear Bu Hanny,\n\nTolong cek kembali untuk hal ini, saya coba dengan source terbaru per 20 Juni 2019 tidak ada kendala yang disampaikan. Terlampir capture nya dari sebelum save dan setelah save.\n\nTerima Kasih\n-Yulianto', 'U0014');
INSERT INTO `tracking` VALUES (1279, 'T201903210092', '2019-07-09 09:38:13', '2019-07-10', NULL, NULL, NULL, 'Up Progress To 0 %', '<p>Tes</p>', 'U0016');
INSERT INTO `tracking` VALUES (1280, 'T201903210092', '2019-07-09 09:44:42', '2019-07-13', 4, 0, 0, 'Up Progress', '<p>Tes</p>', 'U0016');
INSERT INTO `tracking` VALUES (1281, 'T201908120109', '2019-08-12 11:17:31', NULL, NULL, NULL, NULL, 'Created Ticket', 'TIKET DI BUAT', 'U0002');
INSERT INTO `tracking` VALUES (1286, 'T201908120109', '2019-08-21 11:49:01', NULL, NULL, NULL, NULL, 'Ticket disetujui', 'TICKET DITERIMA VENDOR SUPPORT', 'U0016');

-- ----------------------------
-- Table structure for tracking_email
-- ----------------------------
DROP TABLE IF EXISTS `tracking_email`;
CREATE TABLE `tracking_email`  (
  `id_email` int(11) NOT NULL AUTO_INCREMENT,
  `id_ticket` varchar(13) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tanggal` datetime NOT NULL,
  `status` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `subject` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `id_user` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tujuan` text CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  PRIMARY KEY (`id_email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 631 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tracking_email
-- ----------------------------
INSERT INTO `tracking_email` VALUES (26, 'T201807060007', '2018-08-13 09:20:33', '4', 'Completed Ticket T201807060007', 'U0011', NULL);
INSERT INTO `tracking_email` VALUES (45, 'T201807250017', '2018-08-13 13:35:35', '6', 'Solved Ticket T201807250017', 'U0009', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (46, 'T201808140024', '2018-08-14 10:31:06', '1', 'Created Ticket T201808140024', 'U0006', NULL);
INSERT INTO `tracking_email` VALUES (47, 'T201808140024', '2018-08-14 10:58:57', '2', 'Approved Ticket T201808140024', 'U0014', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (48, 'T201808140024', '2018-08-14 10:59:38', '4', 'Processing Ticket T201808140024', 'U0014', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (49, 'T201807160014', '2018-08-14 14:54:13', '6', 'Solved Ticket T201807160014', 'U0009', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (50, 'T201807110012', '2018-08-14 14:56:35', '6', 'Complain Ticket T201807110012', 'U0009', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (51, 'T201808150025', '2018-08-15 11:12:56', '1', 'Created Ticket T201808150025', 'U0008', NULL);
INSERT INTO `tracking_email` VALUES (52, 'T201808150025', '2018-08-15 11:18:58', '2', 'Approved Ticket T201808150025', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (53, 'T201808150025', '2018-08-15 11:19:53', '4', 'Processing Ticket T201808150025', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (54, 'T201807060007', '2018-08-15 11:25:36', '6', 'Reprocess Ticket T201807060007', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (55, 'T201807060007', '2018-08-15 11:26:51', '5', 'Completed Ticket T201807060007', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (56, 'T201807060007', '2018-08-15 16:51:13', '6', 'Solved Ticket T201807060007', 'U0008', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (57, 'T201808140024', '2018-08-16 08:30:18', '5', 'Completed Ticket T201808140024', 'U0014', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (58, 'T201808100023', '2018-08-21 10:22:16', '5', 'Completed Ticket T201808100023', 'U0014', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (66, 'T201808100023', '2018-08-21 14:43:54', '5', 'Completed Ticket T201808100023', 'U0014', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (72, 'T201807110012', '2018-08-23 08:55:47', '6', 'Reprocess Ticket T201807110012', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (73, 'T201807110012', '2018-08-23 09:00:01', '4', 'Processing Ticket T201807110012', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (74, 'T201808100023', '2018-08-23 11:18:08', '6', 'Complain Ticket T201808100023', 'U0008', 'ast.drive123@gmail.com,support@ast-global.co.id,panjihadjarati@modernland.co.id,jie.piranha@gmail.com');
INSERT INTO `tracking_email` VALUES (80, 'T201808100023', '2018-08-23 10:51:29', '6', 'Reprocess Ticket T201808100023', 'U0014', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (81, 'T201808100023', '2018-08-23 10:52:45', '5', 'Completed Ticket T201808100023', 'U0014', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (82, 'T201808100023', '2018-08-23 11:57:26', '6', 'Solved Ticket T201808100023', 'U0008', 'ast.drive123@gmail.com,support@ast-global.co.id,panjihadjarati@modernland.co.id,jie.piranha@gmail.com');
INSERT INTO `tracking_email` VALUES (83, 'T201808150025', '2018-08-24 15:01:16', '5', 'Completed Ticket T201808150025', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (84, 'T201808270026', '2018-08-27 09:43:46', '1', 'Created Ticket T201808270026', 'U0006', NULL);
INSERT INTO `tracking_email` VALUES (85, 'T201808270026', '2018-08-27 09:49:08', '2', 'Approved Ticket T201808270026', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (86, 'T201808270026', '2018-08-27 10:00:02', '4', 'Processing Ticket T201808270026', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (87, 'T201808270027', '2018-08-27 10:47:33', '1', 'Created Ticket T201808270027', 'U0007', NULL);
INSERT INTO `tracking_email` VALUES (88, 'T201808270027', '2018-08-27 11:47:43', '8', 'Confirm New Ticket T201808270027', 'U0007', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (89, 'T201808270027', '2018-08-27 11:47:45', '8', 'Confirm New Ticket T201808270027', 'U0007', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (90, 'T201808270027', '2018-08-27 11:52:59', '8', 'Confirm New Ticket T201808270027', 'U0007', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (91, 'T201808270027', '2018-08-27 11:53:02', '8', 'Confirm New Ticket T201808270027', 'U0007', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (92, 'T201808270027', '2018-08-27 10:58:57', '2', 'Approved Ticket T201808270027', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (93, 'T201808270027', '2018-08-27 11:33:15', '5', 'Completed Ticket T201808270027', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (94, 'T201808150025', '2018-08-27 18:19:55', '6', 'Complain Ticket T201808150025', 'U0008', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (95, 'T201808150025', '2018-08-27 17:33:10', '6', 'Reprocess Ticket T201808150025', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (96, 'T201808150025', '2018-08-27 17:34:50', '5', 'Completed Ticket T201808150025', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (97, 'T201808150025', '2018-08-28 09:44:04', '6', 'Solved Ticket T201808150025', 'U0008', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (98, 'T201808280028', '2018-08-28 16:16:59', '1', 'Created Ticket T201808280028', 'U0006', NULL);
INSERT INTO `tracking_email` VALUES (99, 'T201808280028', '2018-08-28 16:25:09', '2', 'Approved Ticket T201808280028', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (100, 'T201808280028', '2018-08-28 16:28:41', '5', 'Completed Ticket T201808280028', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (101, 'T201808310029', '2018-08-31 15:12:47', '1', 'Created Ticket T201808310029', 'U0008', NULL);
INSERT INTO `tracking_email` VALUES (102, 'T201808140024', '2018-09-03 16:19:03', '6', 'Solved Ticket T201808140024', 'U0006', 'ast.drive123@gmail.com,support@ast-global.co.id,panjihadjarati@modernland.co.id,jie.piranha@gmail.com');
INSERT INTO `tracking_email` VALUES (103, 'T201808280028', '2018-09-03 16:21:23', '6', 'Solved Ticket T201808280028', 'U0006', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (104, 'T201809040030', '2018-09-04 09:10:14', '1', 'Created Ticket T201809040030', 'U0008', NULL);
INSERT INTO `tracking_email` VALUES (105, 'T201809040030', '2018-09-04 11:09:47', '2', 'Approved Ticket T201809040030', 'U0014', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (106, 'T201809040030', '2018-09-04 11:14:02', '5', 'Completed Ticket T201809040030', 'U0014', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (107, 'T201809040030', '2018-09-05 14:21:23', '6', 'Solved Ticket T201809040030', 'U0008', 'ast.drive123@gmail.com,support@ast-global.co.id,panjihadjarati@modernland.co.id,jie.piranha@gmail.com');
INSERT INTO `tracking_email` VALUES (108, 'T201809060031', '2018-09-06 09:46:32', '1', 'Created Ticket T201809060031', 'U0008', NULL);
INSERT INTO `tracking_email` VALUES (109, 'T201809060031', '2018-09-06 10:00:09', '2', 'Approved Ticket T201809060031', 'U0014', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (110, 'T201809060031', '2018-09-07 09:24:29', '5', 'Completed Ticket T201809060031', 'U0014', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (111, 'T201809060031', '2018-09-10 16:13:48', '6', 'Solved Ticket T201809060031', 'U0008', 'ast.drive123@gmail.com,support@ast-global.co.id,panjihadjarati@modernland.co.id,jie.piranha@gmail.com');
INSERT INTO `tracking_email` VALUES (112, 'T201809120032', '2018-09-12 12:04:30', '1', 'Created Ticket T201809120032', 'U0006', NULL);
INSERT INTO `tracking_email` VALUES (113, 'T201809120032', '2018-09-14 08:51:55', '2', 'Approved Ticket T201809120032', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (114, 'T201808310029', '2018-09-14 08:51:58', '2', 'Approved Ticket T201808310029', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (115, 'T201808270026', '2018-09-14 08:53:08', '5', 'Completed Ticket T201808270026', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (116, 'T201809120032', '2018-09-14 08:54:25', '4', 'Processing Ticket T201809120032', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (117, 'T201809140033', '2018-09-14 18:43:22', '1', 'Created Ticket T201809140033', 'U0008', NULL);
INSERT INTO `tracking_email` VALUES (118, 'T201809140034', '2018-09-14 19:05:23', '1', 'Created Ticket T201809140034', 'U0008', NULL);
INSERT INTO `tracking_email` VALUES (119, 'T201809140034', '2018-09-17 09:14:04', '2', 'Approved Ticket T201809140034', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (120, 'T201809140034', '2018-09-17 13:07:28', '5', 'Completed Ticket T201809140034', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (121, 'T201809140033', '2018-09-17 13:08:37', '2', 'Approved Ticket T201809140033', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (122, 'T201809140034', '2018-09-17 15:03:19', '6', 'Solved Ticket T201809140034', 'U0008', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (123, 'T201809170035', '2018-09-17 16:54:53', '1', 'Created Ticket T201809170035', 'U0008', NULL);
INSERT INTO `tracking_email` VALUES (124, 'T201809170035', '2018-09-17 16:57:53', '2', 'Approved Ticket T201809170035', 'U0014', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (125, 'T201809170035', '2018-09-17 17:17:25', '4', 'Processing Ticket T201809170035', 'U0014', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (126, 'T201807110012', '2018-09-17 18:23:10', '4', 'User Comment On Processing Ticket T201807110012', 'U0009', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (127, 'T201807110012', '2018-09-18 08:43:59', '5', 'Completed Ticket T201807110012', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (128, 'T201809120032', '2018-09-18 09:55:30', '5', 'Completed Ticket T201809120032', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (129, 'T201808310029', '2018-09-18 10:23:38', '5', 'Completed Ticket T201808310029', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (130, 'T201809170035', '2018-09-18 16:48:24', '4', 'User Comment On Processing Ticket T201809170035', 'U0008', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (131, 'T201809170035', '2018-09-18 15:51:58', '5', 'Completed Ticket T201809170035', 'U0014', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (132, 'T201809170035', '2018-09-18 17:39:02', '6', 'Solved Ticket T201809170035', 'U0008', 'ast.drive123@gmail.com,support@ast-global.co.id,panjihadjarati@modernland.co.id,jie.piranha@gmail.com');
INSERT INTO `tracking_email` VALUES (133, 'T201809140033', '2018-09-18 16:41:31', '5', 'Completed Ticket T201809140033', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (134, 'T201808310029', '2018-09-18 17:51:02', '6', 'Complain Ticket T201808310029', 'U0008', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (135, 'T201808310029', '2018-09-19 09:59:15', '6', 'Reprocess Ticket T201808310029', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (136, 'T201809190036', '2018-09-19 10:07:16', '1', 'Created Ticket T201809190036', 'U0006', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (137, 'T201809190036', '2018-09-19 10:44:42', '2', 'Approved Ticket T201809190036', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (138, 'T201809190037', '2018-09-19 14:14:14', '1', 'Created Ticket T201809190037', 'U0009', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (139, 'T201809190037', '2018-09-19 14:28:45', '2', 'Approved Ticket T201809190037', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (140, 'T201809190038', '2018-09-19 18:33:26', '1', 'Created Ticket T201809190038', 'U0008', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (141, 'T201809140033', '2018-09-20 10:44:51', '6', 'Complain Ticket T201809140033', 'U0008', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (142, 'T201809190038', '2018-09-20 15:35:27', '8', 'Confirm New Ticket T201809190038', 'U0008', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (143, 'T201808270026', '2018-09-20 16:52:24', '6', 'Solved Ticket T201808270026', 'U0006', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (144, 'T201809120032', '2018-09-20 16:52:37', '6', 'Solved Ticket T201809120032', 'U0006', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (145, 'T201807110012', '2018-09-21 15:20:57', '6', 'Solved Ticket T201807110012', 'U0009', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (146, 'T201809140033', '2018-09-21 17:15:00', '6', 'Reprocess Ticket T201809140033', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (147, 'T201809140033', '2018-09-21 17:17:05', '5', 'Completed Ticket T201809140033', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (148, 'T201809140033', '2018-09-21 18:21:56', '6', 'Solved Ticket T201809140033', 'U0008', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (149, 'T201809240038', '2018-09-24 09:53:40', '1', 'Created Ticket T201809240038', 'U0006', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (150, 'T201809240038', '2018-09-24 10:39:19', '2', 'Approved Ticket T201809240038', 'U0014', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (151, 'T201809240038', '2018-09-24 10:42:10', '5', 'Completed Ticket T201809240038', 'U0014', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (152, 'T201809240038', '2018-09-24 12:01:48', '6', 'Solved Ticket T201809240038', 'U0006', 'ast.drive123@gmail.com,support@ast-global.co.id,panjihadjarati@modernland.co.id,jie.piranha@gmail.com');
INSERT INTO `tracking_email` VALUES (153, 'T201809260039', '2018-09-26 14:26:08', '1', 'Created Ticket T201809260039', 'U0008', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (154, 'T201809270040', '2018-09-27 14:28:01', '1', 'Created Ticket T201809270040', 'U0006', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (155, 'T201809280041', '2018-09-28 09:06:58', '1', 'Created Ticket T201809280041', 'U0008', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (156, 'T201809260039', '2018-09-28 09:22:23', '2', 'Approved Ticket T201809260039', 'U0014', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (157, 'T201809280042', '2018-09-28 10:13:58', '1', 'Created Ticket T201809280042', 'U0009', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (159, 'T201809280042', '2018-09-28 11:33:52', '2', 'Approved Ticket T201809280042', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (160, 'T201809280041', '2018-09-28 11:35:12', '2', 'Approved Ticket T201809280041', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (161, 'T201809270040', '2018-09-28 11:35:25', '2', 'Approved Ticket T201809270040', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (162, 'T201809270040', '2018-09-28 11:38:56', '5', 'Completed Ticket T201809270040', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (163, 'T201809280041', '2018-09-28 11:41:25', '5', 'Completed Ticket T201809280041', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (164, 'T201809280042', '2018-09-28 11:42:14', '4', 'Processing Ticket T201809280042', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (165, 'T201809280041', '2018-09-28 14:04:08', '6', 'Solved Ticket T201809280041', 'U0008', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (172, 'T201809270040', '2018-10-01 10:12:07', '6', 'Solved Ticket T201809270040', 'U0006', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (173, 'T201810010043', '2018-10-01 09:29:32', '1', 'Created Ticket T201810010043', 'U0006', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (174, 'T201810010044', '2018-10-01 09:56:38', '1', 'Created Ticket T201810010044', 'U0006', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (175, 'T201810010045', '2018-10-01 10:00:32', '1', 'Created Ticket T201810010045', 'U0006', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (176, 'T201810010044', '2018-10-01 10:01:51', '2', 'Approved Ticket T201810010044', 'U0014', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (177, 'T201810010044', '2018-10-01 10:02:18', '5', 'Completed Ticket T201810010044', 'U0014', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (178, 'T201810010045', '2018-10-01 10:28:40', '2', 'Approved Ticket T201810010045', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (179, 'T201810010045', '2018-10-01 10:30:30', '5', 'Completed Ticket T201810010045', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (180, 'T201808310029', '2018-10-01 10:31:53', '5', 'Completed Ticket T201808310029', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (181, 'T201810010043', '2018-10-01 10:35:02', '2', 'Approved Ticket T201810010043', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (182, 'T201809280042', '2018-10-01 11:05:16', '5', 'Completed Ticket T201809280042', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (185, 'T201809190036', '2018-10-01 13:36:13', '5', 'Completed Ticket T201809190036', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (186, 'T201809190037', '2018-10-02 09:12:18', '5', 'Completed Ticket T201809190037', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (187, 'T201810010044', '2018-10-02 11:53:34', '6', 'Solved Ticket T201810010044', 'U0006', 'ast.drive123@gmail.com,support@ast-global.co.id,panjihadjarati@modernland.co.id,jie.piranha@gmail.com');
INSERT INTO `tracking_email` VALUES (188, 'T201810010045', '2018-10-02 11:53:41', '6', 'Solved Ticket T201810010045', 'U0006', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (189, 'T201809190036', '2018-10-02 12:07:26', '6', 'Solved Ticket T201809190036', 'U0006', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (190, 'T201808090022', '2018-10-02 11:53:20', '5', 'Completed Ticket T201808090022', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (191, 'T201808090022', '2018-10-02 16:38:16', '6', 'Complain Ticket T201808090022', 'U0008', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (192, 'T201808090022', '2018-10-02 15:39:30', '6', 'Reprocess Ticket T201808090022', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (193, 'T201808090022', '2018-10-02 15:39:25', '6', 'Reprocess Ticket T201808090022', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (194, 'T201808090022', '2018-10-02 15:40:59', '5', 'Completed Ticket T201808090022', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (195, 'T201809280042', '2018-10-02 17:13:34', '6', 'Solved Ticket T201809280042', 'U0009', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (196, 'T201808090022', '2018-10-02 17:23:01', '6', 'Solved Ticket T201808090022', 'U0008', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (197, 'T201810030046', '2018-10-03 11:12:07', '1', 'Created Ticket T201810030046', 'U0002', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (198, 'T201805280002', '2018-10-03 11:13:18', '1', 'Reprocessed Ticket T201805280002', 'U0016', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (199, 'T201810030046', '2018-10-03 11:13:43', '2', 'Approved Ticket T201810030046', 'U0016', 'panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (200, 'T201810030046', '2018-10-03 11:15:12', '5', 'Completed Ticket T201810030046', 'U0016', 'panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (201, 'T201810030046', '2018-10-03 12:16:31', '6', 'Complain Ticket T201810030046', 'U0003', 'panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (202, 'T201810030046', '2018-10-03 11:19:03', '5', 'Completed Ticket T201810030046', 'U0002', 'panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (203, 'T201810030046', '2018-10-03 14:41:33', '6', 'Complain Ticket T201810030046', 'U0002', 'panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (204, 'T201805280002', '2018-10-03 13:42:24', '7', 'Rejected Ticket T201805280002', 'U0016', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (205, 'T201805280002', '2018-10-03 13:42:29', '1', 'Reprocessed Ticket T201805280002', 'U0016', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (206, 'T201810030046', '2018-10-03 13:42:39', '6', 'Reprocess Ticket T201810030046', 'U0016', 'panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (207, 'T201810030046', '2018-10-03 13:43:24', '5', 'Completed Ticket T201810030046', 'U0016', 'panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (208, 'T201810030046', '2018-10-03 14:43:54', '6', 'Complain Ticket T201810030046', 'U0003', 'panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (209, 'T201810030046', '2018-10-03 13:44:23', '6', 'Reprocess Ticket T201810030046', 'U0016', 'panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (210, 'T201810030046', '2018-10-03 13:45:11', '5', 'Completed Ticket T201810030046', 'U0016', 'panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (211, 'T201810030046', '2018-10-03 14:46:13', '6', 'Complain Ticket T201810030046', 'U0003', 'panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (212, 'T201810030046', '2018-10-03 13:47:07', '6', 'Reprocess Ticket T201810030046', 'U0016', 'panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (213, 'T201810030046', '2018-10-03 13:47:20', '4', 'Processing Ticket T201810030046', 'U0016', 'panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (214, 'T201810030046', '2018-10-03 14:50:13', '4', 'User Comment On Processing Ticket T201810030046', 'U0003', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (215, 'T201810030046', '2018-10-03 13:51:00', '5', 'Completed Ticket T201810030046', 'U0016', 'panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (216, 'T201810030046', '2018-10-03 14:51:59', '6', 'Solved Ticket T201810030046', 'U0003', 'panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (217, 'T201810040046', '2018-10-04 16:03:01', '1', 'Created Ticket T201810040046', 'U0008', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (218, 'T201808310029', '2018-10-04 17:19:42', '6', 'Complain Ticket T201808310029', 'U0008', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (219, 'T201810050047', '2018-10-05 10:16:39', '1', 'Created Ticket T201810050047', 'U0006', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (220, 'T201810040046', '2018-10-05 12:21:36', '8', 'Confirm New Ticket T201810040046', 'U0008', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (221, 'T201810050047', '2018-10-05 11:23:32', '2', 'Approved Ticket T201810050047', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (222, 'T201810050047', '2018-10-05 11:24:36', '5', 'Completed Ticket T201810050047', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (223, 'T201810050048', '2018-10-05 13:34:41', '1', 'Created Ticket T201810050048', 'U0002', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (224, 'T201810040046', '2018-10-05 13:51:33', '2', 'Approved Ticket T201810040046', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (225, 'T201808310029', '2018-10-05 13:51:41', '6', 'Reprocess Ticket T201808310029', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (226, 'T201809260039', '2018-10-08 11:11:03', '5', 'Completed Ticket T201809260039', 'U0014', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (227, 'T201810050047', '2018-10-08 12:20:43', '6', 'Solved Ticket T201810050047', 'U0006', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (228, 'T201809190037', '2018-10-08 12:27:22', '6', 'Complain Ticket T201809190037', 'U0009', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (229, 'T201810080048', '2018-10-08 15:48:12', '1', 'Created Ticket T201810080048', 'U0008', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (230, 'T201810080048', '2018-10-08 16:02:28', '2', 'Approved Ticket T201810080048', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (231, 'T201810080048', '2018-10-08 16:06:17', '4', 'Processing Ticket T201810080048', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (232, 'T201809260039', '2018-10-09 09:39:32', '6', 'Complain Ticket T201809260039', 'U0008', 'ast.drive123@gmail.com,support@ast-global.co.id,panjihadjarati@modernland.co.id,jie.piranha@gmail.com');
INSERT INTO `tracking_email` VALUES (233, 'T201808310029', '2018-10-09 09:55:28', '5', 'Completed Ticket T201808310029', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (234, 'T201809190037', '2018-10-09 10:18:32', '6', 'Reprocess Ticket T201809190037', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (235, 'T201809190037', '2018-10-09 10:22:47', '4', 'Processing Ticket T201809190037', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (236, 'T201810040046', '2018-10-09 13:18:28', '5', 'Completed Ticket T201810040046', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (237, 'T201810040046', '2018-10-09 14:48:38', '6', 'Solved Ticket T201810040046', 'U0008', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (238, 'T201808310029', '2018-10-09 17:29:40', '6', 'Complain Ticket T201808310029', 'U0008', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (239, 'T201808310029', '2018-10-09 16:30:04', '6', 'Reprocess Ticket T201808310029', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (240, 'T201808310029', '2018-10-09 16:30:43', '5', 'Completed Ticket T201808310029', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (241, 'T201808310029', '2018-10-10 10:05:48', '6', 'Solved Ticket T201808310029', 'U0008', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (242, 'T201810080048', '2018-10-10 11:57:58', '4', 'User Comment On Processing Ticket T201810080048', 'U0008', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (243, 'T201810110049', '2018-10-11 09:15:09', '1', 'Created Ticket T201810110049', 'U0008', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (244, 'T201810110049', '2018-10-11 09:26:29', '2', 'Approved Ticket T201810110049', 'U0014', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (245, 'T201810110049', '2018-10-11 09:29:01', '4', 'Processing Ticket T201810110049', 'U0014', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (246, 'T201810110049', '2018-10-11 11:00:23', '4', 'User Comment On Processing Ticket T201810110049', 'U0008', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (247, 'T201810110049', '2018-10-11 10:25:17', '4', 'Processing Ticket T201810110049', 'U0014', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (248, 'T201810110049', '2018-10-11 13:03:07', '4', 'User Comment On Processing Ticket T201810110049', 'U0008', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (249, 'T201810110049', '2018-10-12 10:03:05', '5', 'Completed Ticket T201810110049', 'U0014', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (250, 'T201810110049', '2018-10-12 11:29:30', '6', 'Solved Ticket T201810110049', 'U0008', 'ast.drive123@gmail.com,support@ast-global.co.id,panjihadjarati@modernland.co.id,jie.piranha@gmail.com');
INSERT INTO `tracking_email` VALUES (251, 'T201809260039', '2018-10-12 14:55:51', '6', 'Reprocess Ticket T201809260039', 'U0014', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (252, 'T201809260039', '2018-10-12 16:30:07', '5', 'Completed Ticket T201809260039', 'U0014', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (253, 'T201809260039', '2018-10-15 14:03:35', '6', 'Solved Ticket T201809260039', 'U0008', 'ast.drive123@gmail.com,support@ast-global.co.id,panjihadjarati@modernland.co.id,jie.piranha@gmail.com');
INSERT INTO `tracking_email` VALUES (254, 'T201809260039', '2018-10-15 14:03:35', '6', 'Solved Ticket T201809260039', 'U0008', 'ast.drive123@gmail.com,support@ast-global.co.id,panjihadjarati@modernland.co.id,jie.piranha@gmail.com');
INSERT INTO `tracking_email` VALUES (255, 'T201810160050', '2018-10-16 13:43:57', '1', 'Created Ticket T201810160050', '', 'jie.piranha@gmail.com');
INSERT INTO `tracking_email` VALUES (256, 'T201810160051', '2018-10-16 14:05:16', '1', 'Created Ticket T201810160051', 'U0008', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (257, 'T201810160051', '2018-10-16 14:20:35', '2', 'Approved Ticket T201810160051', 'U0014', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (258, 'T201810160051', '2018-10-16 14:22:07', '5', 'Completed Ticket T201810160051', 'U0014', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (259, 'T201810160051', '2018-10-16 15:34:47', '6', 'Solved Ticket T201810160051', 'U0008', 'ast.drive123@gmail.com,support@ast-global.co.id,panjihadjarati@modernland.co.id,jie.piranha@gmail.com');
INSERT INTO `tracking_email` VALUES (260, 'T201810160052', '2018-10-16 16:06:36', '1', 'Created Ticket T201810160052', 'U0008', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (261, 'T201810160052', '2018-10-16 16:08:17', '2', 'Approved Ticket T201810160052', 'U0014', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (262, 'T201810160052', '2018-10-16 16:10:38', '5', 'Completed Ticket T201810160052', 'U0014', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (263, 'T201810160052', '2018-10-16 18:03:12', '6', 'Solved Ticket T201810160052', 'U0008', 'ast.drive123@gmail.com,support@ast-global.co.id,panjihadjarati@modernland.co.id,jie.piranha@gmail.com');
INSERT INTO `tracking_email` VALUES (264, 'T201810160052', '2018-10-16 18:03:12', '6', 'Solved Ticket T201810160052', 'U0008', 'ast.drive123@gmail.com,support@ast-global.co.id,panjihadjarati@modernland.co.id,jie.piranha@gmail.com');
INSERT INTO `tracking_email` VALUES (265, 'T201810010043', '2018-10-17 10:59:47', '5', 'Completed Ticket T201810010043', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (266, 'T201810010043', '2018-10-18 11:51:41', '6', 'Solved Ticket T201810010043', 'U0006', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (267, 'T201807270018', '2018-10-18 11:53:42', '6', 'Complain Ticket T201807270018', 'U0006', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (268, 'T201808270027', '2018-10-18 12:01:43', '6', 'Solved Ticket T201808270027', 'U0007', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (269, 'T201810220053', '2018-10-22 16:36:43', '1', 'Created Ticket T201810220053', 'U0005', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (270, 'T201810240054', '2018-10-24 16:28:20', '1', 'Created Ticket T201810240054', 'U0008', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (271, 'T201810220053', '2018-10-25 10:59:25', '2', 'Approved Ticket T201810220053', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (272, 'T201810240054', '2018-10-25 10:59:22', '2', 'Approved Ticket T201810240054', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (273, 'T201810240054', '2018-10-25 10:59:36', '2', 'Approved Ticket T201810240054', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (274, 'T201810240054', '2018-10-25 11:16:44', '5', 'Completed Ticket T201810240054', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (275, 'T201810220053', '2018-10-25 11:26:35', '4', 'Processing Ticket T201810220053', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (276, 'T201810240054', '2018-10-25 12:44:06', '6', 'Complain Ticket T201810240054', 'U0008', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (277, 'T201810240054', '2018-10-25 11:49:48', '6', 'Reprocess Ticket T201810240054', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (278, 'T201807270018', '2018-10-25 11:49:50', '6', 'Reprocess Ticket T201807270018', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (279, 'T201810240054', '2018-10-25 11:50:38', '5', 'Completed Ticket T201810240054', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (280, 'T201810240054', '2018-10-29 10:12:41', '6', 'Solved Ticket T201810240054', 'U0008', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (281, 'T201810300055', '2018-10-30 17:40:41', '1', 'Created Ticket T201810300055', 'U0008', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (282, 'T201810300055', '2018-10-31 08:55:39', '2', 'Approved Ticket T201810300055', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (283, 'T201810300055', '2018-10-31 08:58:47', '5', 'Completed Ticket T201810300055', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (284, 'T201810300055', '2018-10-31 11:06:41', '6', 'Complain Ticket T201810300055', 'U0008', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (285, 'T201810300055', '2018-10-31 10:08:38', '6', 'Reprocess Ticket T201810300055', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (286, 'T201810300055', '2018-10-31 10:09:18', '4', 'Processing Ticket T201810300055', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (287, 'T201810310056', '2018-10-31 13:26:40', '1', 'Created Ticket T201810310056', 'U0006', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (288, 'T201810310056', '2018-10-31 13:36:54', '2', 'Approved Ticket T201810310056', 'U0014', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (289, 'T201810310056', '2018-10-31 13:40:10', '5', 'Completed Ticket T201810310056', 'U0014', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (290, 'T201810310056', '2018-10-31 15:06:54', '6', 'Solved Ticket T201810310056', 'U0006', 'ast.drive123@gmail.com,support@ast-global.co.id,panjihadjarati@modernland.co.id,jie.piranha@gmail.com');
INSERT INTO `tracking_email` VALUES (291, 'T201811050057', '2018-11-05 17:21:53', '1', 'Created Ticket T201811050057', 'U0006', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (292, 'T201811050057', '2018-11-06 08:55:36', '2', 'Approved Ticket T201811050057', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (293, 'T201811050057', '2018-11-06 08:56:39', '4', 'Processing Ticket T201811050057', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (294, 'T201809190037', '2018-11-06 14:25:47', '5', 'Completed Ticket T201809190037', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (295, 'T201809190037', '2018-11-06 15:33:56', '6', 'Solved Ticket T201809190037', 'U0003', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (296, 'T201810220053', '2018-11-06 14:52:36', '5', 'Completed Ticket T201810220053', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (297, 'T201810080048', '2018-11-06 14:55:07', '5', 'Completed Ticket T201810080048', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (298, 'T201810300055', '2018-11-06 14:59:09', '5', 'Completed Ticket T201810300055', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (299, 'T201810300055', '2018-11-06 16:06:13', '6', 'Solved Ticket T201810300055', 'U0008', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (300, 'T201810080048', '2018-11-06 16:20:06', '6', 'Solved Ticket T201810080048', 'U0008', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (301, 'T201811050057', '2018-11-06 16:01:02', '5', 'Completed Ticket T201811050057', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (302, 'T201811050057', '2018-11-07 10:51:16', '6', 'Complain Ticket T201811050057', 'U0006', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (303, 'T201811050057', '2018-11-07 13:03:33', '6', 'Reprocess Ticket T201811050057', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (304, 'T201811050057', '2018-11-07 13:28:30', '5', 'Completed Ticket T201811050057', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (305, 'T201811090058', '2018-11-09 10:01:50', '1', 'Created Ticket T201811090058', 'U0018', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (306, 'T201811050057', '2018-11-12 10:30:26', '6', 'Solved Ticket T201811050057', 'U0006', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (307, 'T201810220053', '2018-11-12 10:41:58', '6', 'Solved Ticket T201810220053', 'U0005', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (308, 'T201811120059', '2018-11-12 09:49:53', '1', 'Created Ticket T201811120059', 'U0006', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (309, 'T201811120059', '2018-11-12 10:48:24', '2', 'Approved Ticket T201811120059', 'U0014', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (310, 'T201811120059', '2018-11-12 10:56:17', '5', 'Completed Ticket T201811120059', 'U0014', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (311, 'T201811120059', '2018-11-12 15:20:22', '6', 'Complain Ticket T201811120059', 'U0006', 'ast.drive123@gmail.com,support@ast-global.co.id,panjihadjarati@modernland.co.id,jie.piranha@gmail.com');
INSERT INTO `tracking_email` VALUES (312, 'T201811120060', '2018-11-12 14:26:15', '1', 'Created Ticket T201811120060', 'U0006', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (313, 'T201811120060', '2018-11-12 16:25:05', '2', 'Approved Ticket T201811120060', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (314, 'T201811120059', '2018-11-13 09:01:19', '6', 'Reprocess Ticket T201811120059', 'U0014', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (315, 'T201811120059', '2018-11-13 09:12:39', '5', 'Completed Ticket T201811120059', 'U0014', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (316, 'T201811120059', '2018-11-13 10:54:18', '6', 'Solved Ticket T201811120059', 'U0006', 'ast.drive123@gmail.com,support@ast-global.co.id,panjihadjarati@modernland.co.id,jie.piranha@gmail.com');
INSERT INTO `tracking_email` VALUES (317, 'T201811120060', '2018-11-13 11:03:24', '5', 'Completed Ticket T201811120060', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (318, 'T201811090058', '2018-11-13 11:04:41', '2', 'Approved Ticket T201811090058', 'U0014', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (319, 'T201811090058', '2018-11-13 11:05:59', '5', 'Completed Ticket T201811090058', 'U0014', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (320, 'T201811140061', '2018-11-14 16:25:59', '1', 'Created Ticket T201811140061', 'U0006', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (321, 'T201811140061', '2018-11-14 16:30:58', '2', 'Approved Ticket T201811140061', 'U0014', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (322, 'T201811140061', '2018-11-14 17:13:03', '5', 'Completed Ticket T201811140061', 'U0014', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (323, 'T201811090058', '2018-11-15 09:32:22', '6', 'Complain Ticket T201811090058', 'U0018', 'ast.drive123@gmail.com,support@ast-global.co.id,panjihadjarati@modernland.co.id,jie.piranha@gmail.com');
INSERT INTO `tracking_email` VALUES (324, 'T201811140061', '2018-11-15 10:02:41', '6', 'Complain Ticket T201811140061', 'U0006', 'ast.drive123@gmail.com,support@ast-global.co.id,panjihadjarati@modernland.co.id,jie.piranha@gmail.com');
INSERT INTO `tracking_email` VALUES (325, 'T201811120060', '2018-11-15 12:05:49', '6', 'Complain Ticket T201811120060', 'U0006', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (326, 'T201811140061', '2018-11-16 09:14:23', '6', 'Reprocess Ticket T201811140061', 'U0014', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (327, 'T201811140061', '2018-11-16 09:20:34', '4', 'Processing Ticket T201811140061', 'U0014', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (328, 'T201811120060', '2018-11-16 15:24:29', '6', 'Reprocess Ticket T201811120060', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (329, 'T201811120060', '2018-11-21 14:35:12', '4', 'Processing Ticket T201811120060', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (330, 'T201811120060', '2018-11-21 16:07:36', '6', 'Solved Ticket T201811120060', 'U0006', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (331, 'T201807270018', '2018-11-21 15:35:49', '5', 'Completed Ticket T201807270018', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (332, 'T201811140061', '2018-11-21 15:38:39', '4', 'Processing Ticket T201811140061', 'U0014', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (333, 'T201807270018', '2018-11-21 16:42:44', '6', 'Complain Ticket T201807270018', 'U0006', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (334, 'T201811140061', '2018-11-21 16:44:11', '6', 'Complain Ticket T201811140061', 'U0006', 'ast.drive123@gmail.com,support@ast-global.co.id,panjihadjarati@modernland.co.id,jie.piranha@gmail.com');
INSERT INTO `tracking_email` VALUES (335, 'T201811140061', '2018-11-21 15:57:53', '6', 'Reprocess Ticket T201811140061', 'U0014', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (336, 'T201807270018', '2018-11-21 16:18:23', '6', 'Reprocess Ticket T201807270018', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (337, 'T201811140061', '2018-11-21 16:31:13', '4', 'Processing Ticket T201811140061', 'U0014', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (338, 'T201807270018', '2018-11-21 16:36:28', '4', 'Processing Ticket T201807270018', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (339, 'T201807270018', '2018-11-21 17:43:24', '6', 'Solved Ticket T201807270018', 'U0006', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (340, 'T201811140061', '2018-11-21 17:43:34', '6', 'Solved Ticket T201811140061', 'U0006', 'ast.drive123@gmail.com,support@ast-global.co.id,panjihadjarati@modernland.co.id,jie.piranha@gmail.com');
INSERT INTO `tracking_email` VALUES (341, 'T201811230062', '2018-11-23 09:17:42', '1', 'Created Ticket T201811230062', 'U0006', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (342, 'T201811230062', '2018-11-23 10:18:51', '2', 'Approved Ticket T201811230062', 'U0014', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (343, 'T201811230062', '2018-11-23 10:30:11', '5', 'Completed Ticket T201811230062', 'U0014', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (344, 'T201811260063', '2018-11-26 16:29:57', '1', 'Created Ticket T201811260063', 'U0008', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (345, 'T201811260063', '2018-11-26 16:44:29', '2', 'Approved Ticket T201811260063', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (346, 'T201811260063', '2018-11-26 16:44:34', '2', 'Approved Ticket T201811260063', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (347, 'T201811260063', '2018-11-26 16:44:36', '2', 'Approved Ticket T201811260063', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (348, 'T201811260063', '2018-11-26 16:44:36', '2', 'Approved Ticket T201811260063', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (349, 'T201811260063', '2018-11-26 16:44:36', '2', 'Approved Ticket T201811260063', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (350, 'T201811260063', '2018-11-26 16:44:37', '2', 'Approved Ticket T201811260063', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (351, 'T201811260063', '2018-11-26 16:44:37', '2', 'Approved Ticket T201811260063', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (352, 'T201811260063', '2018-11-26 17:07:59', '4', 'Processing Ticket T201811260063', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (353, 'T201811260063', '2018-11-27 09:46:08', '6', 'Complain Ticket T201811260063', 'U0008', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (354, 'T201811260063', '2018-11-28 09:44:59', '6', 'Reprocess Ticket T201811260063', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (355, 'T201811260063', '2018-11-28 09:47:46', '4', 'Processing Ticket T201811260063', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (356, 'T201812040064', '2018-12-04 14:05:36', '1', 'Created Ticket T201812040064', 'U0006', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (357, 'T201812040064', '2018-12-04 14:41:57', '2', 'Approved Ticket T201812040064', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (358, 'T201812040064', '2018-12-04 14:47:31', '5', 'Completed Ticket T201812040064', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (359, 'T201812040064', '2018-12-04 16:29:18', '6', 'Solved Ticket T201812040064', 'U0006', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (360, 'T201812110065', '2018-12-11 10:38:45', '1', 'Created Ticket T201812110065', 'U0006', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (361, 'T201811230062', '2018-12-11 11:39:15', '6', 'Solved Ticket T201811230062', 'U0006', 'ast.drive123@gmail.com,support@ast-global.co.id,panjihadjarati@modernland.co.id,jie.piranha@gmail.com');
INSERT INTO `tracking_email` VALUES (362, 'T201812110065', '2018-12-11 14:19:56', '2', 'Approved Ticket T201812110065', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (363, 'T201812110065', '2018-12-11 14:21:31', '4', 'Processing Ticket T201812110065', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (364, 'T201812110065', '2018-12-11 16:11:32', '6', 'Complain Ticket T201812110065', 'U0006', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (365, 'T201812110065', '2018-12-11 16:04:10', '6', 'Reprocess Ticket T201812110065', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (366, 'T201812110065', '2018-12-11 16:06:03', '4', 'Processing Ticket T201812110065', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (367, 'T201811260063', '2018-12-14 15:14:00', '6', 'Solved Ticket T201811260063', 'U0008', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (368, 'T201812140066', '2018-12-14 14:17:14', '1', 'Created Ticket T201812140066', 'U0008', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (372, 'T201812140066', '2018-12-14 14:58:22', '2', 'Approved Ticket T201812140066', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (373, 'T201812140066', '2018-12-14 15:34:17', '4', 'Processing Ticket T201812140066', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (374, 'T201812140066', '2018-12-14 17:20:10', '6', 'Complain Ticket T201812140066', 'U0008', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (375, 'T201812140066', '2018-12-14 16:22:57', '6', 'Reprocess Ticket T201812140066', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (376, 'T201812140066', '2018-12-14 16:27:04', '4', 'Processing Ticket T201812140066', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (377, 'T201812140066', '2018-12-18 10:05:22', '6', 'Solved Ticket T201812140066', 'U0008', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (378, 'T201812190067', '2018-12-19 14:57:32', '1', 'Created Ticket T201812190067', 'U0017', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (379, 'T201812190068', '2018-12-19 16:26:45', '1', 'Created Ticket T201812190068', 'U0008', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (380, 'T201812190067', '2018-12-19 18:10:32', '2', 'Approved Ticket T201812190067', 'U0014', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (381, 'T201812190068', '2018-12-19 18:11:21', '2', 'Approved Ticket T201812190068', 'U0014', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (382, 'T201812190067', '2018-12-27 15:11:39', '4', 'Processing Ticket T201812190067', 'U0014', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (383, 'T201812190068', '2018-12-27 15:23:14', '5', 'Completed Ticket T201812190068', 'U0014', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (384, 'T201812190068', '2018-12-27 16:38:08', '6', 'Solved Ticket T201812190068', 'U0008', 'ast.drive123@gmail.com,support@ast-global.co.id,panjihadjarati@modernland.co.id,jie.piranha@gmail.com');
INSERT INTO `tracking_email` VALUES (385, 'T201812190067', '2018-12-27 17:47:57', '6', 'Solved Ticket T201812190067', 'U0017', 'ast.drive123@gmail.com,support@ast-global.co.id,panjihadjarati@modernland.co.id,jie.piranha@gmail.com');
INSERT INTO `tracking_email` VALUES (386, 'T201812280069', '2018-12-28 14:15:13', '1', 'Created Ticket T201812280069', 'U0008', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (387, 'T201812280069', '2018-12-28 14:26:21', '2', 'Approved Ticket T201812280069', 'U0014', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (388, 'T201812280069', '2018-12-28 14:27:54', '5', 'Completed Ticket T201812280069', 'U0014', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (389, 'T201812280069', '2018-12-28 15:53:57', '8', 'Confirm New Ticket T201812280069', 'U0008', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (390, 'T201901020070', '2019-01-02 11:10:47', '1', 'Created Ticket T201901020070', 'U0005', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (391, 'T201812280069', '2019-01-02 15:05:51', '6', 'Complain Ticket T201812280069', 'U0008', 'ast.drive123@gmail.com,support@ast-global.co.id,panjihadjarati@modernland.co.id,jie.piranha@gmail.com');
INSERT INTO `tracking_email` VALUES (392, 'T201901030071', '2019-01-03 15:34:35', '1', 'Created Ticket T201901030071', 'U0008', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (393, 'T201901030071', '2019-01-04 08:46:42', '2', 'Approved Ticket T201901030071', 'U0014', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (394, 'T201812280069', '2019-01-04 08:53:12', '6', 'Reprocess Ticket T201812280069', 'U0014', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (395, 'T201812280069', '2019-01-04 08:54:27', '4', 'Processing Ticket T201812280069', 'U0014', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (396, 'T201901030071', '2019-01-04 08:56:15', '4', 'Processing Ticket T201901030071', 'U0014', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (397, 'T201812110065', '2019-01-04 10:19:39', '6', 'Solved Ticket T201812110065', 'U0006', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (398, 'T201901030071', '2019-01-04 10:33:09', '6', 'Complain Ticket T201901030071', 'U0008', 'ast.drive123@gmail.com,support@ast-global.co.id,panjihadjarati@modernland.co.id,jie.piranha@gmail.com');
INSERT INTO `tracking_email` VALUES (399, 'T201901030071', '2019-01-04 10:26:40', '6', 'Reprocess Ticket T201901030071', 'U0014', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (400, 'T201901030071', '2019-01-04 10:30:06', '4', 'Processing Ticket T201901030071', 'U0014', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (401, 'T201901020070', '2019-01-04 10:49:27', '2', 'Approved Ticket T201901020070', 'U0014', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (402, 'T201901020070', '2019-01-04 10:50:00', '4', 'Processing Ticket T201901020070', 'U0014', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (403, 'T201901030071', '2019-01-04 14:13:28', '6', 'Solved Ticket T201901030071', 'U0008', 'ast.drive123@gmail.com,support@ast-global.co.id,panjihadjarati@modernland.co.id,jie.piranha@gmail.com');
INSERT INTO `tracking_email` VALUES (404, 'T201812280069', '2019-01-07 16:11:22', '6', 'Solved Ticket T201812280069', 'U0008', 'ast.drive123@gmail.com,support@ast-global.co.id,panjihadjarati@modernland.co.id,jie.piranha@gmail.com');
INSERT INTO `tracking_email` VALUES (405, 'T201901080072', '2019-01-08 13:11:19', '1', 'Created Ticket T201901080072', 'U0008', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (406, 'T201901080072', '2019-01-08 13:18:05', '2', 'Approved Ticket T201901080072', 'U0014', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (407, 'T201901080072', '2019-01-08 13:18:52', '4', 'Processing Ticket T201901080072', 'U0014', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (408, 'T201901080072', '2019-01-08 14:27:32', '8', 'Confirm New Ticket T201901080072', 'U0008', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (409, 'T201901080072', '2019-01-08 14:28:51', '6', 'Complain Ticket T201901080072', 'U0008', 'ast.drive123@gmail.com,support@ast-global.co.id,panjihadjarati@modernland.co.id,jie.piranha@gmail.com');
INSERT INTO `tracking_email` VALUES (410, 'T201901080072', '2019-01-08 13:29:10', '6', 'Reprocess Ticket T201901080072', 'U0014', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (411, 'T201901080073', '2019-01-08 17:38:02', '1', 'Created Ticket T201901080073', 'U0008', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (412, 'T201901080073', '2019-01-09 09:20:13', '2', 'Approved Ticket T201901080073', 'U0014', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (413, 'T201901080073', '2019-01-09 09:21:28', '4', 'Processing Ticket T201901080073', 'U0014', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (414, 'T201901080072', '2019-01-09 17:05:06', '5', 'Completed Ticket T201901080072', 'U0014', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (415, 'T201901080072', '2019-01-10 10:03:39', '6', 'Solved Ticket T201901080072', 'U0008', 'ast.drive123@gmail.com,support@ast-global.co.id,panjihadjarati@modernland.co.id,jie.piranha@gmail.com');
INSERT INTO `tracking_email` VALUES (416, 'T201901020070', '2019-01-10 14:58:38', '6', 'Solved Ticket T201901020070', 'U0005', 'ast.drive123@gmail.com,support@ast-global.co.id,panjihadjarati@modernland.co.id,jie.piranha@gmail.com');
INSERT INTO `tracking_email` VALUES (417, 'T201901020070', '2019-01-10 15:03:57', '6', 'Complain Ticket T201901020070', 'U0005', 'ast.drive123@gmail.com,support@ast-global.co.id,panjihadjarati@modernland.co.id,jie.piranha@gmail.com');
INSERT INTO `tracking_email` VALUES (418, 'T201901020070', '2019-01-10 14:18:11', '6', 'Reprocess Ticket T201901020070', 'U0014', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (419, 'T201901100074', '2019-01-10 14:42:38', '1', 'Created Ticket T201901100074', 'U0006', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (420, 'T201901100074', '2019-01-10 16:47:41', '2', 'Approved Ticket T201901100074', 'U0014', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (421, 'T201901080073', '2019-01-11 09:50:45', '6', 'Solved Ticket T201901080073', 'U0008', 'ast.drive123@gmail.com,support@ast-global.co.id,panjihadjarati@modernland.co.id,jie.piranha@gmail.com');
INSERT INTO `tracking_email` VALUES (422, 'T201901110075', '2019-01-11 15:32:26', '1', 'Created Ticket T201901110075', 'U0005', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (423, 'T201901100074', '2019-01-14 09:30:10', '5', 'Completed Ticket T201901100074', 'U0014', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (424, 'T201901100074', '2019-01-15 10:02:25', '6', 'Solved Ticket T201901100074', 'U0006', 'ast.drive123@gmail.com,support@ast-global.co.id,panjihadjarati@modernland.co.id,jie.piranha@gmail.com');
INSERT INTO `tracking_email` VALUES (431, 'T201901160077', '2019-01-16 13:13:56', '1', 'Created Ticket T201901160077', 'U0006', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (432, 'T201901110075', '2019-01-16 13:17:27', '2', 'Approved Ticket T201901110075', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (433, 'T201901160077', '2019-01-16 13:17:46', '2', 'Approved Ticket T201901160077', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (438, 'T201901160077', '2019-01-16 13:50:47', '2', 'Approved Ticket T201901160077', 'U0014', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (442, 'T201901160077', '2019-01-16 15:06:46', '5', 'Completed Ticket T201901160077', 'U0014', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (443, 'T201901160079', '2019-01-16 15:36:41', '1', 'Created Ticket T201901160079', 'U0008', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (453, 'T201901160079', '2019-01-17 09:27:05', '2', 'Approved Ticket T201901160079', 'U0014', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (454, 'T201901160079', '2019-01-17 16:47:55', '4', 'Processing Ticket T201901160079', 'U0014', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (455, 'T201901180080', '2019-01-18 11:58:46', '1', 'Created Ticket T201901180080', 'U0006', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (456, 'T201901180080', '2019-01-18 14:13:33', '2', 'Approved Ticket T201901180080', 'U0014', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (457, 'T201901180080', '2019-01-18 14:14:45', '4', 'Processing Ticket T201901180080', 'U0014', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (459, 'T201901220081', '2019-01-22 09:47:00', '1', 'Created Ticket T201901220081', 'U0008', 'jie.piranha@gmail.com');
INSERT INTO `tracking_email` VALUES (460, 'T201901220076', '2019-01-22 10:15:39', '1', 'Created Ticket T201901220082', 'U0008', 'jie.piranha@gmail.com');
INSERT INTO `tracking_email` VALUES (461, 'T201901220083', '2019-01-22 16:38:34', '1', 'Created Ticket T201901220083', 'U0019', 'jie.piranha@gmail.com');
INSERT INTO `tracking_email` VALUES (463, 'T201901220076', '2019-01-23 14:02:46', '2', 'Approved Ticket T201901220082', 'U0014', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (464, 'T201901220081', '2019-01-23 14:30:14', '2', 'Approved Ticket T201901220081', 'U0014', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (465, 'T201901220081', '2019-01-23 14:31:46', '4', 'Processing Ticket T201901220081', 'U0014', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (466, 'T201901120076', '2019-01-23 14:45:53', '5', 'Completed Ticket T201901120076', 'U0014', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (467, 'T201901120076', '2019-01-23 17:02:18', '6', 'Solved Ticket T201901120076', 'U0008', 'ast.drive123@gmail.com,support@ast-global.co.id,panjihadjarati@modernland.co.id,jie.piranha@gmail.com');
INSERT INTO `tracking_email` VALUES (468, 'T201901160079', '2019-01-25 09:36:10', '5', 'Completed Ticket T201901160079', 'U0014', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (469, 'T201901220081', '2019-01-25 09:36:23', '5', 'Completed Ticket T201901220081', 'U0014', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (470, 'T201901160079', '2019-01-25 10:36:36', '6', 'Solved Ticket T201901160079', 'U0008', 'ast.drive123@gmail.com,support@ast-global.co.id,panjihadjarati@modernland.co.id,jie.piranha@gmail.com');
INSERT INTO `tracking_email` VALUES (471, 'T201901220081', '2019-01-25 10:36:39', '6', 'Solved Ticket T201901220081', 'U0008', 'ast.drive123@gmail.com,support@ast-global.co.id,panjihadjarati@modernland.co.id,jie.piranha@gmail.com');
INSERT INTO `tracking_email` VALUES (472, 'T201901160078', '2019-01-25 16:11:00', '1', 'Created Ticket T201901160078', 'U0008', 'jie.piranha@gmail.com');
INSERT INTO `tracking_email` VALUES (474, 'T201901300084', '2019-01-30 09:17:15', '1', 'Created Ticket T201901300082', 'U0005', 'jie.piranha@gmail.com');
INSERT INTO `tracking_email` VALUES (475, 'T201901020070', '2019-01-30 17:17:56', '5', 'Completed Ticket T201901020070', 'U0014', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (476, 'T201901160077', '2019-01-30 17:18:25', '5', 'Completed Ticket T201901160077', 'U0014', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (477, 'T201901180080', '2019-01-30 17:22:05', '5', 'Completed Ticket T201901180080', 'U0014', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (478, 'T201901300083', '2019-01-30 18:13:13', '1', 'Created Ticket T201901300083', 'U0008', 'jie.piranha@gmail.com');
INSERT INTO `tracking_email` VALUES (480, 'T201901020070', '2019-02-01 09:56:43', '6', 'Solved Ticket T201901020070', 'U0005', 'ast.drive123@gmail.com,support@ast-global.co.id,panjihadjarati@modernland.co.id,jie.piranha@gmail.com');
INSERT INTO `tracking_email` VALUES (481, 'T201901300082', '2019-02-01 09:56:51', '8', 'Confirm New Ticket T201901300082', 'U0005', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (482, 'T201901300082', '2019-02-01 09:57:15', '8', 'Confirm New Ticket T201901300082', 'U0005', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (483, 'T201901160077', '2019-02-01 16:56:50', '6', 'Solved Ticket T201901160077', 'U0006', 'ast.drive123@gmail.com,support@ast-global.co.id,panjihadjarati@modernland.co.id,jie.piranha@gmail.com');
INSERT INTO `tracking_email` VALUES (484, 'T201901180080', '2019-02-01 16:56:53', '6', 'Solved Ticket T201901180080', 'U0006', 'ast.drive123@gmail.com,support@ast-global.co.id,panjihadjarati@modernland.co.id,jie.piranha@gmail.com');
INSERT INTO `tracking_email` VALUES (485, 'T201902010084', '2019-02-01 16:52:15', '1', 'Created Ticket T201902010084', 'U0006', 'jie.piranha@gmail.com');
INSERT INTO `tracking_email` VALUES (486, 'T201902070085', '2019-02-07 14:24:12', '1', 'Created Ticket T201902070085', 'U0006', 'jie.piranha@gmail.com');
INSERT INTO `tracking_email` VALUES (488, 'T201901160078', '2019-02-20 11:40:06', '2', 'Approved Ticket T201901160078', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (489, 'T201901300082', '2019-02-20 11:40:11', '2', 'Approved Ticket T201901300082', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (494, 'T201902210086', '2019-02-21 11:10:48', '1', 'Created Ticket T201902210086', 'U0008', 'jie.piranha@gmail.com');
INSERT INTO `tracking_email` VALUES (495, 'T201902210086', '2019-02-22 13:46:13', '2', 'Approved Ticket T201902210086', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (496, 'T201902210086', '2019-02-22 13:50:40', '4', 'Processing Ticket T201902210086', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (497, 'T201902260087', '2019-02-26 14:16:08', '1', 'Created Ticket T201902260087', 'U0008', 'jie.piranha@gmail.com');
INSERT INTO `tracking_email` VALUES (498, 'T201903040088', '2019-03-04 14:32:57', '1', 'Created Ticket T201903040088', 'U0008', 'jie.piranha@gmail.com');
INSERT INTO `tracking_email` VALUES (499, 'T201902070085', '2019-03-05 16:49:14', '2', 'Approved Ticket T201902070085', 'U0014', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (500, 'T201902070085', '2019-03-05 16:50:42', '5', 'Completed Ticket T201902070085', 'U0014', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (501, 'T201902210086', '2019-03-06 11:05:28', '5', 'Completed Ticket T201902210086', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (502, 'T201901300082', '2019-03-06 11:30:16', '5', 'Completed Ticket T201901300082', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (503, 'T201902210086', '2019-03-06 14:17:23', '6', 'Solved Ticket T201902210086', 'U0008', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (504, 'T201903040088', '2019-03-06 15:17:22', '2', 'Approved Ticket T201903040088', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (505, 'T201903040088', '2019-03-06 15:21:07', '4', 'Processing Ticket T201903040088', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (506, 'T201902260087', '2019-03-06 15:54:31', '2', 'Approved Ticket T201902260087', 'U0014', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (507, 'T201902260087', '2019-03-06 16:02:49', '5', 'Completed Ticket T201902260087', 'U0014', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (508, 'T201902010084', '2019-03-06 16:16:54', '2', 'Approved Ticket T201902010084', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (509, 'T201902260087', '2019-03-06 17:51:57', '6', 'Solved Ticket T201902260087', 'U0008', 'ast.drive123@gmail.com,support@ast-global.co.id,panjihadjarati@modernland.co.id,jie.piranha@gmail.com');
INSERT INTO `tracking_email` VALUES (510, 'T201902070085', '2019-03-06 17:02:31', '5', 'Completed Ticket T201902070085', 'U0014', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (511, 'T201901300083', '2019-03-06 17:02:47', '2', 'Approved Ticket T201901300083', 'U0014', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (512, 'T201903040088', '2019-03-06 18:15:10', '4', 'User Comment On Processing Ticket T201903040088', 'U0008', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (513, 'T201902010084', '2019-03-06 17:17:05', '4', 'Processing Ticket T201902010084', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (514, 'T201903040088', '2019-03-08 11:32:41', '4', 'Processing Ticket T201903040088', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (515, 'T201901160078', '2019-03-08 11:38:49', '4', 'Processing Ticket T201901160078', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (516, 'T201903040088', '2019-03-08 16:23:15', '4', 'User Comment On Processing Ticket T201903040088', 'U0008', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (517, 'T201903040088', '2019-03-11 09:08:28', '4', 'Processing Ticket T201903040088', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (518, 'T201903040088', '2019-03-12 12:21:36', '4', 'User Comment On Processing Ticket T201903040088', 'U0008', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (519, 'T201901160078', '2019-03-12 12:22:50', '4', 'User Comment On Processing Ticket T201901160078', 'U0008', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (520, 'T201903040088', '2019-03-12 13:33:51', '4', 'Processing Ticket T201903040088', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (521, 'T201903040088', '2019-03-12 13:45:50', '4', 'Processing Ticket T201903040088', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (522, 'T201901160078', '2019-03-12 13:46:50', '5', 'Completed Ticket T201901160078', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (523, 'T201903040088', '2019-03-12 15:10:18', '4', 'User Comment On Processing Ticket T201903040088', 'U0008', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (524, 'T201901160078', '2019-03-12 15:12:42', '6', 'Solved Ticket T201901160078', 'U0008', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (525, 'T201903040088', '2019-03-12 14:48:27', '4', 'Processing Ticket T201903040088', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (526, 'T201903130089', '2019-03-13 08:30:23', '1', 'Created Ticket T201903130089', 'U0008', 'jie.piranha@gmail.com');
INSERT INTO `tracking_email` VALUES (527, 'T201903190090', '2019-03-19 17:20:01', '1', 'Created Ticket T201903190090', 'U0006', 'jie.piranha@gmail.com');
INSERT INTO `tracking_email` VALUES (528, 'T201903040088', '2019-03-20 15:44:54', '6', 'Solved Ticket T201903040088', 'U0008', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (529, 'T201903200091', '2019-03-20 14:59:22', '1', 'Created Ticket T201903200091', 'U0006', 'jie.piranha@gmail.com');
INSERT INTO `tracking_email` VALUES (530, 'T201903210092', '2019-03-21 12:34:42', '1', 'Created Ticket T201903210092', 'U0002', 'jie.piranha@gmail.com');
INSERT INTO `tracking_email` VALUES (531, 'T201903210092', '2019-03-21 12:43:24', '2', 'Approved Ticket T201903210092', 'U0016', 'panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (532, 'T201902010084', '2019-03-21 14:03:26', '4', 'User Comment On Processing Ticket T201902010084', 'U0006', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (533, 'T201903200091', '2019-03-21 13:36:37', '2', 'Approved Ticket T201903200091', 'U0014', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (534, 'T201903200091', '2019-03-21 13:38:21', '4', 'Processing Ticket T201903200091', 'U0014', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (535, 'T201902010084', '2019-03-21 13:44:14', '5', 'Completed Ticket T201902010084', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (536, 'T201903190090', '2019-03-21 13:46:58', '2', 'Approved Ticket T201903190090', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (537, 'T201903190090', '2019-03-21 13:50:10', '4', 'Processing Ticket T201903190090', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (538, 'T201903130089', '2019-03-21 13:58:31', '2', 'Approved Ticket T201903130089', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (539, 'T201903130089', '2019-03-21 13:59:18', '4', 'Processing Ticket T201903130089', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (540, 'T201903210093', '2019-03-21 15:01:23', '1', 'Created Ticket T201903210093', 'U0005', 'jie.piranha@gmail.com');
INSERT INTO `tracking_email` VALUES (541, 'T201901300082', '2019-03-21 16:30:31', '6', 'Solved Ticket T201901300082', 'U0005', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (542, 'T201903190090', '2019-03-21 18:33:38', '4', 'User Comment On Processing Ticket T201903190090', 'U0006', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (543, 'T201902010084', '2019-03-21 18:34:10', '6', 'Solved Ticket T201902010084', 'U0006', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (544, 'T201903200091', '2019-03-21 18:37:42', '4', 'User Comment On Processing Ticket T201903200091', 'U0006', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (545, 'T201903130089', '2019-03-21 18:44:17', '4', 'User Comment On Processing Ticket T201903130089', 'U0008', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (546, 'T201903210093', '2019-03-25 18:23:05', '8', 'Confirm New Ticket T201903210093', 'U0005', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (547, 'T201901110075', '2019-04-01 10:34:38', '5', 'Completed Ticket T201901110075', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (548, 'T201903210093', '2019-04-01 11:06:29', '2', 'Approved Ticket T201903210093', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (549, 'T201903210093', '2019-04-01 11:07:20', '4', 'Processing Ticket T201903210093', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (550, 'T201904040094', '2019-04-04 11:55:20', '1', 'Created Ticket T201904040094', 'U0005', 'jie.piranha@gmail.com');
INSERT INTO `tracking_email` VALUES (551, 'T201904040094', '2019-04-04 13:02:04', '8', 'Confirm New Ticket T201904040094', 'U0005', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (552, 'T201904040094', '2019-04-04 14:01:43', '2', 'Approved Ticket T201904040094', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (553, 'T201904040094', '2019-04-04 14:02:19', '4', 'Processing Ticket T201904040094', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (554, 'T201903210092', '2019-04-04 14:27:18', '4', 'Processing Ticket T201903210092', 'U0016', 'panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (555, 'T201903210092', '2019-04-05 10:22:45', '4', 'Processing Ticket T201903210092', 'U0016', 'panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (556, 'T201904080095', '2019-04-08 15:28:08', '1', 'Created Ticket T201904080095', 'U0005', 'jie.piranha@gmail.com');
INSERT INTO `tracking_email` VALUES (557, 'T201904240096', '2019-04-24 17:23:55', '1', 'Created Ticket T201904240096', 'U0006', 'jie.piranha@gmail.com');
INSERT INTO `tracking_email` VALUES (558, 'T201904240097', '2019-04-24 17:27:09', '1', 'Created Ticket T201904240097', 'U0006', 'jie.piranha@gmail.com');
INSERT INTO `tracking_email` VALUES (561, 'T201904250098', '2019-04-25 16:40:09', '1', 'Created Ticket T201904250098', 'U0005', 'jie.piranha@gmail.com');
INSERT INTO `tracking_email` VALUES (562, 'T201903130089', '2019-04-26 12:36:34', '5', 'Completed Ticket T201903130089', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (563, 'T201903190090', '2019-04-26 12:46:48', '4', 'Processing Ticket T201903190090', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (564, 'T201903130089', '2019-04-26 14:18:42', '6', 'Solved Ticket T201903130089', 'U0008', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (565, 'T201903190090', '2019-04-26 15:25:54', '4', 'User Comment On Processing Ticket T201903190090', 'U0006', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (566, 'T201903190090', '2019-04-26 16:34:24', '5', 'Completed Ticket T201903190090', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (567, 'T201904240096', '2019-04-26 16:36:50', '7', 'Rejected Ticket T201904240096', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (568, 'T201904240096', '2019-04-26 16:37:13', '1', 'Reprocessed Ticket T201904240096', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (569, 'T201904240096', '2019-04-26 16:37:18', '7', 'Rejected Ticket T201904240096', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (570, 'T201903190090', '2019-04-26 18:19:54', '6', 'Solved Ticket T201903190090', 'U0006', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (571, 'T201904290099', '2019-04-29 11:22:41', '1', 'Created Ticket T201904290099', 'U0006', 'jie.piranha@gmail.com');
INSERT INTO `tracking_email` VALUES (572, 'T201904290100', '2019-04-29 13:41:24', '1', 'Created Ticket T201904290100', 'U0005', 'jie.piranha@gmail.com');
INSERT INTO `tracking_email` VALUES (573, 'T201904290101', '2019-04-29 16:33:56', '1', 'Created Ticket T201904290101', 'U0005', 'jie.piranha@gmail.com');
INSERT INTO `tracking_email` VALUES (574, 'T201904080095', '2019-04-30 10:53:20', '2', 'Approved Ticket T201904080095', 'U0014', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (575, 'T201904080095', '2019-04-30 10:59:37', '4', 'Processing Ticket T201904080095', 'U0014', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (576, 'T201904240096', '2019-04-30 11:00:02', '1', 'Reprocessed Ticket T201904240096', 'U0014', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (577, 'T201904240096', '2019-04-30 11:01:09', '2', 'Approved Ticket T201904240096', 'U0014', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (578, 'T201904290099', '2019-04-30 11:02:48', '2', 'Approved Ticket T201904290099', 'U0014', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (579, 'T201901300083', '2019-04-30 16:28:46', '5', 'Completed Ticket T201901300083', 'U0014', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (580, 'T201905020102', '2019-05-02 14:08:09', '1', 'Created Ticket T201905020102', 'U0005', 'jie.piranha@gmail.com');
INSERT INTO `tracking_email` VALUES (582, 'T201905030103', '2019-05-03 15:31:47', '1', 'Created Ticket T201905030103', 'U0002', 'jie.piranha@gmail.com');
INSERT INTO `tracking_email` VALUES (583, 'T201905060104', '2019-05-06 13:21:16', '1', 'Created Ticket T201905060104', 'U0006', 'jie.piranha@gmail.com');
INSERT INTO `tracking_email` VALUES (584, 'T201905060104', '2019-05-06 13:37:47', '2', 'Approved Ticket T201905060104', 'U0014', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (585, 'T201905030103', '2019-05-06 13:37:52', '2', 'Approved Ticket T201905030103', 'U0014', 'panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (586, 'T201905030103', '2019-05-06 13:38:09', '5', 'Completed Ticket T201905030103', 'U0014', 'panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (587, 'T201901110075', '2019-05-06 16:14:18', '5', 'Completed Ticket T201901110075', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (588, 'T201905060104', '2019-05-07 11:33:00', '5', 'Completed Ticket T201905060104', 'U0014', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (589, 'T201901300083', '2019-05-07 12:40:03', '6', 'Solved Ticket T201901300083', 'U0008', 'ast.drive123@gmail.com,support@ast-global.co.id,panjihadjarati@modernland.co.id,jie.piranha@gmail.com');
INSERT INTO `tracking_email` VALUES (590, 'T201905070105', '2019-05-07 15:05:49', '1', 'Created Ticket T201905070105', 'U0008', 'jie.piranha@gmail.com');
INSERT INTO `tracking_email` VALUES (591, 'T201905060104', '2019-05-08 09:44:45', '6', 'Solved Ticket T201905060104', 'U0006', 'ast.drive123@gmail.com,support@ast-global.co.id,panjihadjarati@modernland.co.id,jie.piranha@gmail.com');
INSERT INTO `tracking_email` VALUES (592, 'T201905130106', '2019-05-13 13:19:15', '1', 'Created Ticket T201905130106', 'U0008', 'jie.piranha@gmail.com');
INSERT INTO `tracking_email` VALUES (593, 'T201904250098', '2019-05-15 09:29:34', '2', 'Approved Ticket T201904250098', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (594, 'T201904290100', '2019-05-15 09:29:40', '2', 'Approved Ticket T201904290100', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (595, 'T201904250098', '2019-05-15 09:30:38', '5', 'Completed Ticket T201904250098', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (596, 'T201904290100', '2019-05-15 09:31:16', '5', 'Completed Ticket T201904290100', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (597, 'T201905130106', '2019-05-15 09:31:45', '2', 'Approved Ticket T201905130106', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (598, 'T201905130106', '2019-05-15 09:32:33', '4', 'Processing Ticket T201905130106', 'U0011', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (599, 'T201905130106', '2019-05-16 08:39:14', '4', 'User Comment On Processing Ticket T201905130106', 'U0008', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (600, 'T201903210092', '2019-05-16 08:50:01', '4', 'User Comment On Processing Ticket T201903210092', 'U0002', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (601, 'T201903210092', '2019-05-16 08:53:45', '4', 'Processing Ticket T201903210092', 'U0016', 'panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (602, 'T201903210092', '2019-05-17 15:35:30', '4', 'Processing Ticket T201903210092', 'U0016', 'panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (603, 'T201903210092', '2019-05-17 16:08:39', '4', 'Processing Ticket T201903210092', 'U0016', 'panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (604, 'T201903210092', '2019-05-17 16:15:24', '4', 'Processing Ticket T201903210092', 'U0016', 'panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (605, 'T201903210092', '2019-05-17 16:18:53', '4', 'Processing Ticket T201903210092', 'U0016', 'panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (606, 'T201904250098', '2019-05-21 14:19:02', '6', 'Solved Ticket T201904250098', 'U0005', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (607, 'T201901110075', '2019-05-21 14:19:07', '6', 'Solved Ticket T201901110075', 'U0005', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (608, 'T201904290100', '2019-05-21 14:19:33', '6', 'Solved Ticket T201904290100', 'U0005', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (609, 'T201903210092', '2019-05-23 12:13:31', '4', 'Processing Ticket T201903210092', 'U0016', 'panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (610, 'T201905270107', '2019-05-27 14:51:50', '1', 'Created Ticket T201905270107', 'U0008', 'jie.piranha@gmail.com');
INSERT INTO `tracking_email` VALUES (611, 'T201903210092', '2019-05-29 09:40:21', '4', 'Processing Ticket T201903210092', 'U0016', 'panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (612, 'T201903210092', '2019-05-29 09:41:22', '4', 'Processing Ticket T201903210092', 'U0016', 'panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (613, 'T201903210092', '2019-05-29 09:42:14', '4', 'User Comment On Processing Ticket T201903210092', 'U0002', 'ast.drive123@gmail.com,support@ast-global.co.id,jie.piranha@gmail.com,panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (615, 'T201905070105', '2019-06-10 10:07:41', '2', 'Approved Ticket T201905070105', 'U0014', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (616, 'T201905070105', '2019-06-10 10:12:20', '5', 'Completed Ticket T201905070105', 'U0014', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (617, 'T201905070105', '2019-06-12 10:34:39', '6', 'Solved Ticket T201905070105', 'U0008', 'ast.drive123@gmail.com,support@ast-global.co.id,panjihadjarati@modernland.co.id,jie.piranha@gmail.com');
INSERT INTO `tracking_email` VALUES (618, 'T201906190108', '2019-06-19 09:59:51', '1', 'Created Ticket T201906190108', 'U0006', 'jie.piranha@gmail.com');
INSERT INTO `tracking_email` VALUES (619, 'T201905030103', '2019-06-20 09:45:15', '5', 'Completed Ticket T201905030103', 'U0014', 'panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (620, 'T201906190108', '2019-06-20 09:45:49', '2', 'Approved Ticket T201906190108', 'U0014', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (621, 'T201906190108', '2019-06-20 09:45:49', '2', 'Approved Ticket T201906190108', 'U0014', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (622, 'T201906190108', '2019-06-20 09:46:48', '4', 'Processing Ticket T201906190108', 'U0014', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (623, 'T201905030103', '2019-06-20 09:47:16', '5', 'Completed Ticket T201905030103', 'U0014', 'panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (624, 'T201904290099', '2019-06-20 11:38:27', '5', 'Completed Ticket T201904290099', 'U0014', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (625, 'T201904290101', '2019-06-20 11:45:44', '2', 'Approved Ticket T201904290101', 'U0014', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (626, 'T201904290101', '2019-06-20 11:47:16', '5', 'Completed Ticket T201904290101', 'U0014', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (627, 'T201905020102', '2019-06-20 11:49:30', '2', 'Approved Ticket T201905020102', 'U0014', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (628, 'T201905020102', '2019-06-20 11:50:58', '5', 'Completed Ticket T201905020102', 'U0014', 'ticketing.ast@modernland.co.id');
INSERT INTO `tracking_email` VALUES (629, 'T201903210092', '2019-07-09 09:38:13', '4', 'Processing Ticket T201903210092', 'U0016', 'panjihadjarati@modernland.co.id');
INSERT INTO `tracking_email` VALUES (630, 'T201903210092', '2019-07-09 09:44:42', '4', 'Processing Ticket T201903210092', 'U0016', 'panjihadjarati@modernland.co.id');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `id_user` varchar(11) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nama` varchar(35) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `alamat` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `email` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `username` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(32) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `level` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `vendor` text CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `app` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  PRIMARY KEY (`id_user`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('U0001', 'ARITIO', 'TANGERANG', 'aritio@modernland.co.id;simatupangfunky@gmail.com', 'aritio', '9c7cc2cde1939666d314378b18857721', 'ADMIN', 'modernland', NULL);
INSERT INTO `user` VALUES ('U0002', 'PANJI', 'JAKARTA', 'panjihadjarati@modernland.co.id', 'panji', '9c7cc2cde1939666d314378b18857721', 'USER', 'modernland', 'ast_desktop');
INSERT INTO `user` VALUES ('U0003', 'HENDRI', 'JAKARTA', 'hendri@modernland.co.id', 'hendri', '9c7cc2cde1939666d314378b18857721', 'SUPERVISOR', 'modernland', '');
INSERT INTO `user` VALUES ('U0005', 'HANNY', 'JAKARTA', 'ticketing.ast@modernland.co.id', 'hanny', '9c7cc2cde1939666d314378b18857721', 'USER', 'modernland', 'ast_desktop');
INSERT INTO `user` VALUES ('U0006', 'PUTRI', 'JAKARTA', 'ticketing.ast@modernland.co.id', 'putri', 'a341a74ea661afcb5d8bdb07438987b0', 'USER', 'modernland', 'ast_desktop');
INSERT INTO `user` VALUES ('U0007', 'ESTER', 'JAKARTA GARDEN CITY', 'ticketing.ast@modernland.co.id', 'ester', '9c7cc2cde1939666d314378b18857721', 'USER', 'modernland', 'ast_desktop');
INSERT INTO `user` VALUES ('U0008', 'HERI DARMAWAN', 'JAKARTA GARDEN CITY', 'ticketing.ast@modernland.co.id', 'heridar', '4a2db3403a08e35f978b18e9e4f15048', 'USER', 'modernland', 'ast_desktop');
INSERT INTO `user` VALUES ('U0009', 'RANGGAUNG', 'MODERN CIKANDE', 'ticketing.ast@modernland.co.id', 'ranggaung', '9c7cc2cde1939666d314378b18857721', 'USER', 'modernland', 'ast_desktop');
INSERT INTO `user` VALUES ('U0011', 'AST SUPPORT', 'JAKARTA', 'ast.drive123@gmail.com,panjihadjarati@modernland.co.id', 'supportast', '82080600934821faf0bc59cba79964bc', 'VENDOR', 'ast', 'ast_desktop');
INSERT INTO `user` VALUES ('U0012', 'YABES MULTIPRO SOLUSINDO', 'JAKARTA', 'jie.piranha@gmail.com', 'supporastweb', '9c7cc2cde1939666d314378b18857721', 'VENDOR', 'realta', NULL);
INSERT INTO `user` VALUES ('U0013', 'JOVI', 'DEPOK', 'jie.piranha@gmail.com', 'jovi', '9c7cc2cde1939666d314378b18857721', 'USER', 'pgm', NULL);
INSERT INTO `user` VALUES ('U0014', 'AST SUPPORT 2', 'JAKARTA', 'support@ast-global.co.id,panjihadjarati@modernland.co.id', 'supportast2', 'ccad16e0fe658a17b289328b26fb1931', 'VENDOR', 'ast', 'ast_desktop');
INSERT INTO `user` VALUES ('U0015', 'TAMARA', 'JAKARTA', 'tamara@modernland.co.id', 'tamara', '2c216b1ba5e33a27eb6d3df7de7f8c36', 'SUPERVISOR', 'modernland', '');
INSERT INTO `user` VALUES ('U0016', 'SUPPORT TEST', 'JAKARTA', 'panjihadjarati@modernland.co.id', 'supportaja', '9c7cc2cde1939666d314378b18857721', 'VENDOR', 'ast', 'ast_desktop');
INSERT INTO `user` VALUES ('U0017', 'KUKUH', 'JAKARTA GARDEN CITY', 'ticketing.ast@modernland.co.id', 'kukuh', '9c7cc2cde1939666d314378b18857721', 'USER', 'modernland', 'ast_desktop');
INSERT INTO `user` VALUES ('U0018', 'DIKSON', 'MODERN CIKANDE', 'ticketing.ast@modernland.co.id', 'dikson', '2534424c8acd2eaa539debcc10d0abb0', 'USER', 'modernland', 'ast_desktop');
INSERT INTO `user` VALUES ('U0019', 'PANJI ', '-', 'jie.piranha@gmail.com', 'panjiastweb', '9c7cc2cde1939666d314378b18857721', 'USER', 'modernland_astweb', 'ast_web');
INSERT INTO `user` VALUES ('U0020', 'AST WEB SUPPORT', '-', 'jie.piranha@gmail.com', 'supportastweb2', '9c7cc2cde1939666d314378b18857721', 'VENDOR', 'ast_web', 'ast_web');

-- ----------------------------
-- Table structure for user_akses
-- ----------------------------
DROP TABLE IF EXISTS `user_akses`;
CREATE TABLE `user_akses`  (
  `id_akses` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `user` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `akses` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of user_akses
-- ----------------------------
INSERT INTO `user_akses` VALUES ('1', 'Modernland Realty', 'modernland');
INSERT INTO `user_akses` VALUES ('2', 'AST Desktop', 'vendor');
INSERT INTO `user_akses` VALUES ('3', 'AST WEB', 'vendor');
INSERT INTO `user_akses` VALUES ('4', 'Realta', 'vendor');

-- ----------------------------
-- Table structure for user_app
-- ----------------------------
DROP TABLE IF EXISTS `user_app`;
CREATE TABLE `user_app`  (
  `id` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `app` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `akses` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `id_user` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of user_app
-- ----------------------------
INSERT INTO `user_app` VALUES ('1', 'ast_desktop', 'modernland', 'U0001');
INSERT INTO `user_app` VALUES ('2', 'ast_web', 'modernland', 'U0001');
INSERT INTO `user_app` VALUES ('3', 'ast_desktop', 'modernland', 'U0002');
INSERT INTO `user_app` VALUES ('4', 'ast_web', 'modernland', 'U0002');
INSERT INTO `user_app` VALUES ('5', 'ast_desktop', 'modernland', 'U0003');
INSERT INTO `user_app` VALUES ('6', 'ast_web', 'modernland', 'U0003');
INSERT INTO `user_app` VALUES ('7', 'ast_desktop', 'modernland', 'U0005');
INSERT INTO `user_app` VALUES ('8', 'ast_desktop', 'modernland', 'U0006');
INSERT INTO `user_app` VALUES ('9', 'ast_desktop', 'modernland', 'U0007');
INSERT INTO `user_app` VALUES ('10', 'ast_desktop', 'modernland', 'U0008');
INSERT INTO `user_app` VALUES ('11', 'ast_desktop', 'modernland', 'U0009');
INSERT INTO `user_app` VALUES ('12', 'ast_desktop', 'vendor', 'U0011');
INSERT INTO `user_app` VALUES ('13', 'ast_desktop', 'modernland', 'U0013');
INSERT INTO `user_app` VALUES ('14', 'ast_desktop', 'vendor', 'U0014');
INSERT INTO `user_app` VALUES ('15', 'ast_desktop', 'modernland', 'U0015');
INSERT INTO `user_app` VALUES ('16', 'ast_desktop', 'vendor', 'U0016');
INSERT INTO `user_app` VALUES ('17', 'ast_web', 'vendor', 'U0016');
INSERT INTO `user_app` VALUES ('18', 'ast_desktop', 'modernland', 'U0018');
INSERT INTO `user_app` VALUES ('19', 'ast_web', 'vendor', 'U0019');
INSERT INTO `user_app` VALUES ('20', 'ast_web', 'vendor', 'U0020');
INSERT INTO `user_app` VALUES ('21', 'ast_web', 'vendor', 'U0012');

SET FOREIGN_KEY_CHECKS = 1;
