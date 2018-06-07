<?php
// This file was auto-generated from sdk-root/src/data/cloudhsm/2014-05-30/docs-2.json
return [ 'version' => '2.0', 'operations' => [ 'CreateHapg' => '<p>Creates a high-availability partition group. A high-availability partition group is a group of partitions that spans multiple physical HSMs.</p>', 'CreateHsm' => '<p>Creates an uninitialized HSM instance. </p> <p>There is an upfront fee charged for each HSM instance that you create with the <a>CreateHsm</a> operation. If you accidentally provision an HSM and want to request a refund, delete the instance using the <a>DeleteHsm</a> operation, go to the <a href="https://console.aws.amazon.com/support/home#/">AWS Support Center</a>, create a new case, and select <b>Account and Billing Support</b>.</p> <important> <p> <p>It can take up to 20 minutes to create and provision an HSM. You can monitor the status of the HSM with the <a>DescribeHsm</a> operation. The HSM is ready to be initialized when the status changes to <code>RUNNING</code>.</p> </p> </important>', 'CreateLunaClient' => '<p>Creates an HSM client.</p>', 'DeleteHapg' => '<p>Deletes a high-availability partition group.</p>', 'DeleteHsm' => '<p>Deletes an HSM. After completion, this operation cannot be undone and your key material cannot be recovered.</p>', 'DeleteLunaClient' => '<p>Deletes a client.</p>', 'DescribeHapg' => '<p>Retrieves information about a high-availability partition group.</p>', 'DescribeHsm' => '<p>Retrieves information about an HSM. You can identify the HSM by its ARN or its serial number.</p>', 'DescribeLunaClient' => '<p>Retrieves information about an HSM client.</p>', 'GetConfig' => '<p>Gets the configuration files necessary to connect to all high availability partition groups the client is associated with.</p>', 'ListAvailableZones' => '<p>Lists the Availability Zones that have available AWS CloudHSM capacity.</p>', 'ListHapgs' => '<p>Lists the high-availability partition groups for the account.</p> <p>This operation supports pagination with the use of the <i>NextToken</i> member. If more results are available, the <i>NextToken</i> member of the response contains a token that you pass in the next call to <a>ListHapgs</a> to retrieve the next set of items.</p>', 'ListHsms' => '<p>Retrieves the identifiers of all of the HSMs provisioned for the current customer.</p> <p>This operation supports pagination with the use of the <i>NextToken</i> member. If more results are available, the <i>NextToken</i> member of the response contains a token that you pass in the next call to <a>ListHsms</a> to retrieve the next set of items.</p>', 'ListLunaClients' => '<p>Lists all of the clients.</p> <p>This operation supports pagination with the use of the <i>NextToken</i> member. If more results are available, the <i>NextToken</i> member of the response contains a token that you pass in the next call to <a>ListLunaClients</a> to retrieve the next set of items.</p>', 'ModifyHapg' => '<p>Modifies an existing high-availability partition group.</p>', 'ModifyHsm' => '<p>Modifies an HSM.</p> <important> <p> <p>This operation can result in the HSM being offline for up to 15 minutes while the AWS CloudHSM service is reconfigured. If you are modifying a production HSM, you should ensure that your AWS CloudHSM service is configured for high availability, and consider executing this operation during a maintenance window.</p> </p> </important>', 'ModifyLunaClient' => '<p>Modifies the certificate used by the client.</p> <p>This action can potentially start a workflow to install the new certificate on the client\'s HSMs.</p>', ], 'service' => '<fullname>AWS CloudHSM Service</fullname>', 'shapes' => [ 'AZ' => [ 'base' => NULL, 'refs' => [ 'AZList$member' => NULL, 'DescribeHsmResponse$AvailabilityZone' => '<p>The Availability Zone that the HSM is in.</p>', ], ], 'AZList' => [ 'base' => NULL, 'refs' => [ 'ListAvailableZonesResponse$AZList' => '<p>The list of Availability Zones that have available AWS CloudHSM capacity.</p>', ], ], 'Boolean' => [ 'base' => NULL, 'refs' => [ 'CloudHsmServiceException$retryable' => '<p>Indicates if the action can be retried.</p>', ], ], 'Certificate' => [ 'base' => NULL, 'refs' => [ 'CreateLunaClientRequest$Certificate' => '<p>The contents of a Base64-Encoded X.509 v3 certificate to be installed on the HSMs used by this client.</p>', 'DescribeLunaClientResponse$Certificate' => '<p>The certificate installed on the HSMs used by this client.</p>', 'ModifyLunaClientRequest$Certificate' => '<p>The new certificate for the client. </p>', ], ], 'CertificateFingerprint' => [ 'base' => NULL, 'refs' => [ 'DescribeLunaClientRequest$CertificateFingerprint' => '<p>The certificate fingerprint.</p>', 'DescribeLunaClientResponse$CertificateFingerprint' => '<p>The certificate fingerprint.</p>', ], ], 'ClientArn' => [ 'base' => NULL, 'refs' => [ 'ClientList$member' => NULL, 'CreateLunaClientResponse$ClientArn' => '<p>The ARN of the client.</p>', 'DeleteLunaClientRequest$ClientArn' => '<p>The ARN of the client to delete.</p>', 'DescribeLunaClientRequest$ClientArn' => '<p>The ARN of the client.</p>', 'DescribeLunaClientResponse$ClientArn' => '<p>The ARN of the client.</p>', 'GetConfigRequest$ClientArn' => '<p>The ARN of the client.</p>', 'ModifyLunaClientRequest$ClientArn' => '<p>The ARN of the client.</p>', 'ModifyLunaClientResponse$ClientArn' => '<p>The ARN of the client.</p>', ], ], 'ClientLabel' => [ 'base' => NULL, 'refs' => [ 'CreateLunaClientRequest$Label' => '<p>The label for the client.</p>', ], ], 'ClientList' => [ 'base' => NULL, 'refs' => [ 'ListLunaClientsResponse$ClientList' => '<p>The list of clients.</p>', ], ], 'ClientToken' => [ 'base' => NULL, 'refs' => [ 'CreateHsmRequest$ClientToken' => '<p>A user-defined token to ensure idempotence. Subsequent calls to this operation with the same token will be ignored.</p>', ], ], 'ClientVersion' => [ 'base' => NULL, 'refs' => [ 'GetConfigRequest$ClientVersion' => '<p>The client version.</p>', ], ], 'CloudHsmInternalException' => [ 'base' => '<p>Indicates that an internal error occurred.</p>', 'refs' => [], ], 'CloudHsmObjectState' => [ 'base' => NULL, 'refs' => [ 'DescribeHapgResponse$State' => '<p>The state of the high-availability partition group.</p>', ], ], 'CloudHsmServiceException' => [ 'base' => '<p>Indicates that an exception occurred in the AWS CloudHSM service.</p>', 'refs' => [], ], 'CreateHapgRequest' => [ 'base' => '<p>Contains the inputs for the <a>CreateHapgRequest</a> action.</p>', 'refs' => [], ], 'CreateHapgResponse' => [ 'base' => '<p>Contains the output of the <a>CreateHAPartitionGroup</a> action.</p>', 'refs' => [], ], 'CreateHsmRequest' => [ 'base' => '<p>Contains the inputs for the <a>CreateHsm</a> operation. </p>', 'refs' => [], ], 'CreateHsmResponse' => [ 'base' => '<p>Contains the output of the <a>CreateHsm</a> operation.</p>', 'refs' => [], ], 'CreateLunaClientRequest' => [ 'base' => '<p>Contains the inputs for the <a>CreateLunaClient</a> action.</p>', 'refs' => [], ], 'CreateLunaClientResponse' => [ 'base' => '<p>Contains the output of the <a>CreateLunaClient</a> action.</p>', 'refs' => [], ], 'DeleteHapgRequest' => [ 'base' => '<p>Contains the inputs for the <a>DeleteHapg</a> action.</p>', 'refs' => [], ], 'DeleteHapgResponse' => [ 'base' => '<p>Contains the output of the <a>DeleteHapg</a> action.</p>', 'refs' => [], ], 'DeleteHsmRequest' => [ 'base' => '<p>Contains the inputs for the <a>DeleteHsm</a> operation. </p>', 'refs' => [], ], 'DeleteHsmResponse' => [ 'base' => '<p>Contains the output of the <a>DeleteHsm</a> operation.</p>', 'refs' => [], ], 'DeleteLunaClientRequest' => [ 'base' => NULL, 'refs' => [], ], 'DeleteLunaClientResponse' => [ 'base' => NULL, 'refs' => [], ], 'DescribeHapgRequest' => [ 'base' => '<p>Contains the inputs for the <a>DescribeHapg</a> action.</p>', 'refs' => [], ], 'DescribeHapgResponse' => [ 'base' => '<p>Contains the output of the <a>DescribeHapg</a> action.</p>', 'refs' => [], ], 'DescribeHsmRequest' => [ 'base' => '<p>Contains the inputs for the <a>DescribeHsm</a> operation. </p>', 'refs' => [], ], 'DescribeHsmResponse' => [ 'base' => '<p>Contains the output of the <a>DescribeHsm</a> operation.</p>', 'refs' => [], ], 'DescribeLunaClientRequest' => [ 'base' => NULL, 'refs' => [], ], 'DescribeLunaClientResponse' => [ 'base' => NULL, 'refs' => [], ], 'EniId' => [ 'base' => NULL, 'refs' => [ 'DescribeHsmResponse$EniId' => '<p>The identifier of the elastic network interface (ENI] attached to the HSM.</p>', ], ], 'ExternalId' => [ 'base' => NULL, 'refs' => [ 'CreateHsmRequest$ExternalId' => '<p>The external ID from <b>IamRoleArn</b>, if present.</p>', 'ModifyHsmRequest$ExternalId' => '<p>The new external ID.</p>', ], ], 'GetConfigRequest' => [ 'base' => NULL, 'refs' => [], ], 'GetConfigResponse' => [ 'base' => NULL, 'refs' => [], ], 'HapgArn' => [ 'base' => NULL, 'refs' => [ 'CreateHapgResponse$HapgArn' => '<p>The ARN of the high-availability partition group.</p>', 'DeleteHapgRequest$HapgArn' => '<p>The ARN of the high-availability partition group to delete.</p>', 'DescribeHapgRequest$HapgArn' => '<p>The ARN of the high-availability partition group to describe.</p>', 'DescribeHapgResponse$HapgArn' => '<p>The ARN of the high-availability partition group.</p>', 'HapgList$member' => NULL, 'ModifyHapgRequest$HapgArn' => '<p>The ARN of the high-availability partition group to modify.</p>', 'ModifyHapgResponse$HapgArn' => '<p>The ARN of the high-availability partition group.</p>', ], ], 'HapgList' => [ 'base' => NULL, 'refs' => [ 'GetConfigRequest$HapgList' => '<p>A list of ARNs that identify the high-availability partition groups that are associated with the client.</p>', 'ListHapgsResponse$HapgList' => '<p>The list of high-availability partition groups.</p>', ], ], 'HsmArn' => [ 'base' => '<p>An ARN that identifies an HSM.</p>', 'refs' => [ 'CreateHsmResponse$HsmArn' => '<p>The ARN of the HSM.</p>', 'DeleteHsmRequest$HsmArn' => '<p>The ARN of the HSM to delete.</p>', 'DescribeHsmRequest$HsmArn' => '<p>The ARN of the HSM. Either the <i>HsmArn</i> or the <i>SerialNumber</i> parameter must be specified.</p>', 'DescribeHsmResponse$HsmArn' => '<p>The ARN of the HSM.</p>', 'HsmList$member' => NULL, 'ModifyHsmRequest$HsmArn' => '<p>The ARN of the HSM to modify.</p>', 'ModifyHsmResponse$HsmArn' => '<p>The ARN of the HSM.</p>', ], ], 'HsmList' => [ 'base' => '<p>Contains a list of ARNs that identify the HSMs.</p>', 'refs' => [ 'DescribeHapgResponse$HsmsLastActionFailed' => NULL, 'DescribeHapgResponse$HsmsPendingDeletion' => NULL, 'DescribeHapgResponse$HsmsPendingRegistration' => NULL, 'ListHsmsResponse$HsmList' => '<p>The list of ARNs that identify the HSMs.</p>', ], ], 'HsmSerialNumber' => [ 'base' => NULL, 'refs' => [ 'DescribeHsmRequest$HsmSerialNumber' => '<p>The serial number of the HSM. Either the <i>HsmArn</i> or the <i>HsmSerialNumber</i> parameter must be specified.</p>', 'DescribeHsmResponse$SerialNumber' => '<p>The serial number of the HSM.</p>', ], ], 'HsmStatus' => [ 'base' => NULL, 'refs' => [ 'DescribeHsmResponse$Status' => '<p>The status of the HSM.</p>', ], ], 'IamRoleArn' => [ 'base' => NULL, 'refs' => [ 'CreateHsmRequest$IamRoleArn' => '<p>The ARN of an IAM role to enable the AWS CloudHSM service to allocate an ENI on your behalf.</p>', 'DescribeHsmResponse$IamRoleArn' => '<p>The ARN of the IAM role assigned to the HSM.</p>', 'ModifyHsmRequest$IamRoleArn' => '<p>The new IAM role ARN.</p>', ], ], 'InvalidRequestException' => [ 'base' => '<p>Indicates that one or more of the request parameters are not valid.</p>', 'refs' => [], ], 'IpAddress' => [ 'base' => NULL, 'refs' => [ 'CreateHsmRequest$EniIp' => '<p>The IP address to assign to the HSM\'s ENI.</p> <p>If an IP address is not specified, an IP address will be randomly chosen from the CIDR range of the subnet.</p>', 'CreateHsmRequest$SyslogIp' => '<p>The IP address for the syslog monitoring server. The AWS CloudHSM service only supports one syslog monitoring server.</p>', 'DescribeHsmResponse$EniIp' => '<p>The IP address assigned to the HSM\'s ENI.</p>', 'ModifyHsmRequest$EniIp' => '<p>The new IP address for the elastic network interface (ENI] attached to the HSM.</p> <p>If the HSM is moved to a different subnet, and an IP address is not specified, an IP address will be randomly chosen from the CIDR range of the new subnet.</p>', 'ModifyHsmRequest$SyslogIp' => '<p>The new IP address for the syslog monitoring server. The AWS CloudHSM service only supports one syslog monitoring server.</p>', ], ], 'Label' => [ 'base' => NULL, 'refs' => [ 'CreateHapgRequest$Label' => '<p>The label of the new high-availability partition group.</p>', 'DescribeHapgResponse$Label' => '<p>The label for the high-availability partition group.</p>', 'DescribeLunaClientResponse$Label' => '<p>The label of the client.</p>', 'ModifyHapgRequest$Label' => '<p>The new label for the high-availability partition group.</p>', ], ], 'ListAvailableZonesRequest' => [ 'base' => '<p>Contains the inputs for the <a>ListAvailableZones</a> action. </p>', 'refs' => [], ], 'ListAvailableZonesResponse' => [ 'base' => NULL, 'refs' => [], ], 'ListHapgsRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListHapgsResponse' => [ 'base' => NULL, 'refs' => [], ], 'ListHsmsRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListHsmsResponse' => [ 'base' => '<p>Contains the output of the <a>ListHsms</a> operation.</p>', 'refs' => [], ], 'ListLunaClientsRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListLunaClientsResponse' => [ 'base' => NULL, 'refs' => [], ], 'ModifyHapgRequest' => [ 'base' => NULL, 'refs' => [], ], 'ModifyHapgResponse' => [ 'base' => NULL, 'refs' => [], ], 'ModifyHsmRequest' => [ 'base' => '<p>Contains the inputs for the <a>ModifyHsm</a> operation. </p>', 'refs' => [], ], 'ModifyHsmResponse' => [ 'base' => '<p>Contains the output of the <a>ModifyHsm</a> operation.</p>', 'refs' => [], ], 'ModifyLunaClientRequest' => [ 'base' => NULL, 'refs' => [], ], 'ModifyLunaClientResponse' => [ 'base' => NULL, 'refs' => [], ], 'PaginationToken' => [ 'base' => NULL, 'refs' => [ 'ListHapgsRequest$NextToken' => '<p>The <i>NextToken</i> value from a previous call to <a>ListHapgs</a>. Pass null if this is the first call.</p>', 'ListHapgsResponse$NextToken' => '<p>If not null, more results are available. Pass this value to <a>ListHapgs</a> to retrieve the next set of items.</p>', 'ListHsmsRequest$NextToken' => '<p>The <i>NextToken</i> value from a previous call to <a>ListHsms</a>. Pass null if this is the first call.</p>', 'ListHsmsResponse$NextToken' => '<p>If not null, more results are available. Pass this value to <a>ListHsms</a> to retrieve the next set of items.</p>', 'ListLunaClientsRequest$NextToken' => '<p>The <i>NextToken</i> value from a previous call to <a>ListLunaClients</a>. Pass null if this is the first call.</p>', 'ListLunaClientsResponse$NextToken' => '<p>If not null, more results are available. Pass this to <a>ListLunaClients</a> to retrieve the next set of items.</p>', ], ], 'PartitionArn' => [ 'base' => NULL, 'refs' => [ 'PartitionList$member' => NULL, ], ], 'PartitionList' => [ 'base' => NULL, 'refs' => [ 'DescribeHsmResponse$Partitions' => '<p>The list of partitions on the HSM.</p>', ], ], 'PartitionSerial' => [ 'base' => NULL, 'refs' => [ 'PartitionSerialList$member' => NULL, ], ], 'PartitionSerialList' => [ 'base' => NULL, 'refs' => [ 'DescribeHapgResponse$PartitionSerialList' => '<p>The list of partition serial numbers that belong to the high-availability partition group.</p>', 'ModifyHapgRequest$PartitionSerialList' => '<p>The list of partition serial numbers to make members of the high-availability partition group.</p>', ], ], 'SshKey' => [ 'base' => NULL, 'refs' => [ 'CreateHsmRequest$SshKey' => '<p>The SSH public key to install on the HSM.</p>', 'DescribeHsmResponse$SshPublicKey' => '<p>The public SSH key.</p>', ], ], 'String' => [ 'base' => NULL, 'refs' => [ 'CloudHsmServiceException$message' => '<p>Additional information about the error.</p>', 'DeleteHapgResponse$Status' => '<p>The status of the action.</p>', 'DeleteHsmResponse$Status' => '<p>The status of the operation.</p>', 'DeleteLunaClientResponse$Status' => '<p>The status of the action.</p>', 'DescribeHapgResponse$HapgSerial' => '<p>The serial number of the high-availability partition group.</p>', 'DescribeHsmResponse$StatusDetails' => '<p>Contains additional information about the status of the HSM.</p>', 'DescribeHsmResponse$VendorName' => '<p>The name of the HSM vendor.</p>', 'DescribeHsmResponse$HsmType' => '<p>The HSM model type.</p>', 'DescribeHsmResponse$SoftwareVersion' => '<p>The HSM software version.</p>', 'DescribeHsmResponse$ServerCertUri' => '<p>The URI of the certificate server.</p>', 'GetConfigResponse$ConfigType' => '<p>The type of credentials.</p>', 'GetConfigResponse$ConfigFile' => '<p>The chrystoki.conf configuration file.</p>', 'GetConfigResponse$ConfigCred' => '<p>The certificate file containing the server.pem files of the HSMs.</p>', ], ], 'SubnetId' => [ 'base' => NULL, 'refs' => [ 'CreateHsmRequest$SubnetId' => '<p>The identifier of the subnet in your VPC in which to place the HSM.</p>', 'DescribeHsmResponse$SubnetId' => '<p>The identifier of the subnet that the HSM is in.</p>', 'ModifyHsmRequest$SubnetId' => '<p>The new identifier of the subnet that the HSM is in. The new subnet must be in the same Availability Zone as the current subnet.</p>', ], ], 'SubscriptionType' => [ 'base' => '<p>Specifies the type of subscription for the HSM.</p> <ul> <li> <b>PRODUCTION</b> - The HSM is being used in a production environment.</li> <li> <b>TRIAL</b> - The HSM is being used in a product trial.</li> </ul>', 'refs' => [ 'CreateHsmRequest$SubscriptionType' => NULL, 'DescribeHsmResponse$SubscriptionType' => NULL, ], ], 'Timestamp' => [ 'base' => NULL, 'refs' => [ 'DescribeHapgResponse$LastModifiedTimestamp' => '<p>The date and time the high-availability partition group was last modified.</p>', 'DescribeHsmResponse$SubscriptionStartDate' => '<p>The subscription start date.</p>', 'DescribeHsmResponse$SubscriptionEndDate' => '<p>The subscription end date.</p>', 'DescribeHsmResponse$SshKeyLastUpdated' => '<p>The date and time that the SSH key was last updated.</p>', 'DescribeHsmResponse$ServerCertLastUpdated' => '<p>The date and time that the server certificate was last updated.</p>', 'DescribeLunaClientResponse$LastModifiedTimestamp' => '<p>The date and time the client was last modified.</p>', ], ], 'VpcId' => [ 'base' => NULL, 'refs' => [ 'DescribeHsmResponse$VpcId' => '<p>The identifier of the VPC that the HSM is in.</p>', ], ], ],];
