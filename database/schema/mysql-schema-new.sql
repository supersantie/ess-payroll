/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
DROP TABLE IF EXISTS `activity_logs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `activity_logs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_email` varchar(191) NOT NULL,
  `description` text NOT NULL,
  `ip_address` varchar(191) NOT NULL,
  `action_type` enum('login','logout','create','edit','delete','view','upload','print','update') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `activity_logs_user_email_index` (`user_email`),
  CONSTRAINT `activity_logs_user_email_foreign` FOREIGN KEY (`user_email`) REFERENCES `users` (`email`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `attendances`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `attendances` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `employee_code` varchar(191) NOT NULL,
  `time_in` time DEFAULT NULL,
  `time_out` time DEFAULT NULL,
  `working_hours` double DEFAULT NULL,
  `status` enum('on time','undertime','late','on leave') DEFAULT NULL,
  `date` date NOT NULL,
  `payroll_status` enum('recorded','processed') NOT NULL DEFAULT 'recorded',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `attendances_employee_code_index` (`employee_code`),
  CONSTRAINT `attendances_employee_code_foreign` FOREIGN KEY (`employee_code`) REFERENCES `work_main_db`.`employees` (`code`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `certificates`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `certificates` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `certificate_type` enum('Certificate of Employment') NOT NULL,
  `employee_code` varchar(191) NOT NULL,
  `reason_type` enum('Personal','Education','Government') NOT NULL,
  `remarks` text NOT NULL,
  `status` enum('approve','denied','for clearance','pending') NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `certificates_employee_code_index` (`employee_code`),
  CONSTRAINT `certificates_employee_code_foreign` FOREIGN KEY (`employee_code`) REFERENCES `employees` (`code`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `company_loans`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `company_loans` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `employee_code` varchar(191) NOT NULL,
  `amount` double NOT NULL,
  `months_to_be_paid` int(11) NOT NULL,
  `amount_to_be_paid` double NOT NULL,
  `loan_repayment` enum('Every 1st Cutoff','Every 2nd Cutoff') NOT NULL,
  `loan_status` enum('Pending','Unsettled','Paid') NOT NULL DEFAULT 'Unsettled',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `company_loans_employee_code_index` (`employee_code`),
  CONSTRAINT `company_loans_employee_code_foreign` FOREIGN KEY (`employee_code`) REFERENCES `work_main_db`.`employees` (`code`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `cutoffs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cutoffs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `generated_date` datetime NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `total_released_amount` double NOT NULL,
  `payroll_period` enum('1st cutoff','2nd cutoff') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `employees`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `employees` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(191) NOT NULL,
  `first_name` varchar(191) NOT NULL,
  `middle_name` varchar(191) DEFAULT NULL,
  `last_name` varchar(191) NOT NULL,
  `job_role` enum('Software Engineer','Web Developer','Graphic Designer','Digital Marketer','Customer Service Representative','Accountant','Human Resources Manager','Sales Manager','Project Manager','Content Writer') NOT NULL,
  `basic_daily_rate` double NOT NULL,
  `monthly_salary` double NOT NULL,
  `profile_picture` varchar(191) DEFAULT NULL,
  `email` varchar(191) DEFAULT NULL,
  `ss_number` varchar(191) DEFAULT NULL,
  `pagibig_number` varchar(191) DEFAULT NULL,
  `date_hired` date NOT NULL,
  `status` enum('full time','part time','probationary','terminated') NOT NULL DEFAULT 'probationary',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `employees_code_unique` (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `ess_accounts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ess_accounts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `employee_code` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `working_email` varchar(191) NOT NULL,
  `outstanding_loan_balance` double NOT NULL DEFAULT 0,
  `otp_code` varchar(191) DEFAULT NULL,
  `otp_requested_at` timestamp NULL DEFAULT NULL,
  `avatar` varchar(191) DEFAULT NULL,
  `device_id` varchar(191) DEFAULT NULL,
  `status` enum('active','deactivated') NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `ess_accounts_email_unique` (`email`),
  UNIQUE KEY `ess_accounts_working_email_unique` (`working_email`),
  KEY `ess_accounts_employee_code_index` (`employee_code`),
  CONSTRAINT `ess_accounts_employee_code_foreign` FOREIGN KEY (`employee_code`) REFERENCES `work_main_db`.`employees` (`code`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(191) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) unsigned NOT NULL,
  `reserved_at` int(10) unsigned DEFAULT NULL,
  `available_at` int(10) unsigned NOT NULL,
  `created_at` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `leaves`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `leaves` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `employee_code` varchar(191) NOT NULL,
  `reason` text NOT NULL,
  `leave_date` date NOT NULL,
  `status` enum('approved','pending','denied') NOT NULL DEFAULT 'pending',
  `leave_category` enum('leave without pay','sick','vacation','maternity','birthday') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `leaves_employee_code_index` (`employee_code`),
  CONSTRAINT `leaves_employee_code_foreign` FOREIGN KEY (`employee_code`) REFERENCES `employees` (`code`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `loan_amortization_logs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `loan_amortization_logs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `loans`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `loans` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `employee_code` varchar(191) NOT NULL,
  `loan_account_number` varchar(191) NOT NULL,
  `months_to_pay` int(11) NOT NULL,
  `amount` double NOT NULL,
  `amount_to_be_paid` double NOT NULL DEFAULT 0,
  `government_benefit_type` enum('sss','pag_ibig') NOT NULL,
  `loan_type` enum('Salary Loan','Calamity Loan','Housing Loan','Educational Loan') NOT NULL,
  `status` enum('On going','Finished') NOT NULL DEFAULT 'On going',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `loans_employee_code_index` (`employee_code`),
  CONSTRAINT `loans_employee_code_foreign` FOREIGN KEY (`employee_code`) REFERENCES `work_main_db`.`employees` (`code`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `model_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `model_type` varchar(191) NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `model_has_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) unsigned NOT NULL,
  `model_type` varchar(191) NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `overtimes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `overtimes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `employee_code` varchar(191) NOT NULL,
  `no_of_hours` int(11) NOT NULL,
  `rate_percentage` double NOT NULL,
  `date_issued` datetime NOT NULL,
  `status` enum('approved','denied','pending','processed') NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `overtimes_employee_code_index` (`employee_code`),
  CONSTRAINT `overtimes_employee_code_foreign` FOREIGN KEY (`employee_code`) REFERENCES `work_main_db`.`employees` (`code`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `payroll_periods`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `payroll_periods` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `periodical_type` enum('monthly','semi monthly') NOT NULL,
  `duration` enum('12 days','30 days') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `payroll_settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `payroll_settings` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(191) NOT NULL,
  `value` varchar(191) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `payrolls`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `payrolls` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `employee_code` varchar(191) NOT NULL,
  `paid_hours` double NOT NULL DEFAULT 0,
  `overtime` double NOT NULL DEFAULT 0,
  `company_loan` double NOT NULL DEFAULT 0,
  `sss` double NOT NULL DEFAULT 0,
  `phil_health` double NOT NULL DEFAULT 0,
  `pag_ibig` double NOT NULL DEFAULT 0,
  `net_pay` double NOT NULL DEFAULT 0,
  `date_issued` datetime DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `status` enum('released','hold','issued') NOT NULL DEFAULT 'released',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `payrolls_employee_code_index` (`employee_code`),
  CONSTRAINT `payrolls_employee_code_foreign` FOREIGN KEY (`employee_code`) REFERENCES `work_main_db`.`employees` (`code`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `payslips`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `payslips` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `perks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `perks` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `perk_type` enum('Food Allowance','Transportation Allowance','13th Month Pay') NOT NULL,
  `employee_code` varchar(191) NOT NULL,
  `remarks` text NOT NULL,
  `amount` double NOT NULL,
  `status` enum('released','hold','issued') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `perks_employee_code_index` (`employee_code`),
  CONSTRAINT `perks_employee_code_foreign` FOREIGN KEY (`employee_code`) REFERENCES `employees` (`code`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permissions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) NOT NULL,
  `guard_name` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(191) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `reimbursements`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reimbursements` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `employee_code` varchar(191) NOT NULL,
  `amount` double NOT NULL,
  `or_number` varchar(191) NOT NULL,
  `proof_of_payment` varchar(191) NOT NULL,
  `remarks` text NOT NULL,
  `status` enum('approved','pending','denied') NOT NULL DEFAULT 'pending',
  `reimbursement_category` enum('miscellaneous','travel','transportation','office supplies','meal') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `reimbursements_employee_code_index` (`employee_code`),
  CONSTRAINT `reimbursements_employee_code_foreign` FOREIGN KEY (`employee_code`) REFERENCES `employees` (`code`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `role_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `role_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) NOT NULL,
  `guard_name` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `sss_contributions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sss_contributions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `range_compensation` varchar(191) NOT NULL,
  `ee_amount_contribution` double NOT NULL,
  `er_amount_contribution` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) NOT NULL,
  `avatar` text NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (1,'2014_10_12_000000_create_users_table',1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (2,'2014_10_12_100000_create_password_resets_table',1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (3,'2019_08_19_000000_create_failed_jobs_table',1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (4,'2019_12_14_000001_create_personal_access_tokens_table',1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (5,'2024_01_28_070749_create_employees_table',1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (6,'2024_01_28_071412_create_attendances_table',1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (7,'2024_01_28_071924_create_overtimes_table',1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (8,'2024_01_28_072419_create_cutoffs_table',1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (9,'2024_01_28_072900_create_loans_table',1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (10,'2024_01_28_072917_create_payroll_periods_table',1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (11,'2024_01_28_101922_create_activity_logs_table',1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (12,'2024_01_28_125006_create_perks_table',1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (13,'2024_01_28_135314_create_payrolls_table',1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (14,'2024_01_28_142629_create_payslips_table',1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (15,'2024_01_30_142212_create_payroll_settings_table',1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (16,'2024_02_05_154309_create_ess_accounts_table',1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (17,'2024_02_14_115515_create_permission_tables',1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (18,'2024_02_16_153915_create_company_loans_table',1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (19,'2024_02_28_144506_create_leaves_table',1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (20,'2024_02_28_155615_create_reimbursements_table',1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (21,'2024_03_01_133656_create_loan_amortization_logs_table',1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (22,'2024_03_03_012829_create_certificates_table',1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (23,'2024_03_12_121514_create_jobs_table',1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (24,'2024_03_28_140024_create_sss_contributions_table',1);
