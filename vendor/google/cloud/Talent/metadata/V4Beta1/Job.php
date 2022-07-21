<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/talent/v4beta1/job.proto

namespace GPBMetadata\Google\Cloud\Talent\V4Beta1;

class Job
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Cloud\Talent\V4Beta1\Common::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        \GPBMetadata\Google\Type\PostalAddress::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0af7100a25676f6f676c652f636c6f75642f74616c656e742f7634626574" .
            "61312f6a6f622e70726f746f121b676f6f676c652e636c6f75642e74616c" .
            "656e742e763462657461311a1f676f6f676c652f70726f746f6275662f74" .
            "696d657374616d702e70726f746f1a1e676f6f676c652f70726f746f6275" .
            "662f77726170706572732e70726f746f1a20676f6f676c652f747970652f" .
            "706f7374616c5f616464726573732e70726f746f1a1c676f6f676c652f61" .
            "70692f616e6e6f746174696f6e732e70726f746f22a70e0a034a6f62120c" .
            "0a046e616d65180120012809120f0a07636f6d70616e7918022001280912" .
            "160a0e7265717569736974696f6e5f6964180320012809120d0a05746974" .
            "6c6518042001280912130a0b6465736372697074696f6e18052001280912" .
            "110a09616464726573736573180620032809124a0a106170706c69636174" .
            "696f6e5f696e666f18072001280b32302e676f6f676c652e636c6f75642e" .
            "74616c656e742e763462657461312e4a6f622e4170706c69636174696f6e" .
            "496e666f123d0a0c6a6f625f62656e656669747318082003280e32272e67" .
            "6f6f676c652e636c6f75642e74616c656e742e763462657461312e4a6f62" .
            "42656e6566697412480a11636f6d70656e736174696f6e5f696e666f1809" .
            "2001280b322d2e676f6f676c652e636c6f75642e74616c656e742e763462" .
            "657461312e436f6d70656e736174696f6e496e666f12510a11637573746f" .
            "6d5f61747472696275746573180a2003280b32362e676f6f676c652e636c" .
            "6f75642e74616c656e742e763462657461312e4a6f622e437573746f6d41" .
            "747472696275746573456e747279123d0a0c6465677265655f7479706573" .
            "180b2003280e32272e676f6f676c652e636c6f75642e74616c656e742e76" .
            "3462657461312e4465677265655479706512120a0a6465706172746d656e" .
            "74180c2001280912450a10656d706c6f796d656e745f7479706573180d20" .
            "03280e322b2e676f6f676c652e636c6f75642e74616c656e742e76346265" .
            "7461312e456d706c6f796d656e745479706512120a0a696e63656e746976" .
            "6573180e2001280912150a0d6c616e67756167655f636f6465180f200128" .
            "0912380a096a6f625f6c6576656c18102001280e32252e676f6f676c652e" .
            "636c6f75642e74616c656e742e763462657461312e4a6f624c6576656c12" .
            "170a0f70726f6d6f74696f6e5f76616c756518112001280512160a0e7175" .
            "616c696669636174696f6e7318122001280912180a10726573706f6e7369" .
            "62696c697469657318132001280912420a0e706f7374696e675f72656769" .
            "6f6e18142001280e322a2e676f6f676c652e636c6f75642e74616c656e74" .
            "2e763462657461312e506f7374696e67526567696f6e123b0a0a76697369" .
            "62696c69747918152001280e32272e676f6f676c652e636c6f75642e7461" .
            "6c656e742e763462657461312e5669736962696c69747912320a0e6a6f62" .
            "5f73746172745f74696d6518162001280b321a2e676f6f676c652e70726f" .
            "746f6275662e54696d657374616d7012300a0c6a6f625f656e645f74696d" .
            "6518172001280b321a2e676f6f676c652e70726f746f6275662e54696d65" .
            "7374616d7012380a14706f7374696e675f7075626c6973685f74696d6518" .
            "182001280b321a2e676f6f676c652e70726f746f6275662e54696d657374" .
            "616d7012370a13706f7374696e675f6578706972655f74696d6518192001" .
            "280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d70" .
            "12370a13706f7374696e675f6372656174655f74696d65181a2001280b32" .
            "1a2e676f6f676c652e70726f746f6275662e54696d657374616d7012370a" .
            "13706f7374696e675f7570646174655f74696d65181b2001280b321a2e67" .
            "6f6f676c652e70726f746f6275662e54696d657374616d70121c0a14636f" .
            "6d70616e795f646973706c61795f6e616d65181c2001280912420a0c6465" .
            "72697665645f696e666f181d2001280b322c2e676f6f676c652e636c6f75" .
            "642e74616c656e742e763462657461312e4a6f622e44657269766564496e" .
            "666f124e0a1270726f63657373696e675f6f7074696f6e73181e2001280b" .
            "32322e676f6f676c652e636c6f75642e74616c656e742e76346265746131" .
            "2e4a6f622e50726f63657373696e674f7074696f6e731a440a0f4170706c" .
            "69636174696f6e496e666f120e0a06656d61696c7318012003280912130a" .
            "0b696e737472756374696f6e180220012809120c0a047572697318032003" .
            "28091a89010a0b44657269766564496e666f12380a096c6f636174696f6e" .
            "7318012003280b32252e676f6f676c652e636c6f75642e74616c656e742e" .
            "763462657461312e4c6f636174696f6e12400a0e6a6f625f63617465676f" .
            "7269657318032003280e32282e676f6f676c652e636c6f75642e74616c65" .
            "6e742e763462657461312e4a6f6243617465676f72791a88010a1150726f" .
            "63657373696e674f7074696f6e7312290a2164697361626c655f73747265" .
            "65745f616464726573735f7265736f6c7574696f6e18012001280812480a" .
            "1168746d6c5f73616e6974697a6174696f6e18022001280e322d2e676f6f" .
            "676c652e636c6f75642e74616c656e742e763462657461312e48746d6c53" .
            "616e6974697a6174696f6e1a650a15437573746f6d417474726962757465" .
            "73456e747279120b0a036b6579180120012809123b0a0576616c75651802" .
            "2001280b322c2e676f6f676c652e636c6f75642e74616c656e742e763462" .
            "657461312e437573746f6d4174747269627574653a023801427e0a1f636f" .
            "6d2e676f6f676c652e636c6f75642e74616c656e742e7634626574613142" .
            "104a6f625265736f7572636550726f746f50015a41676f6f676c652e676f" .
            "6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f63" .
            "6c6f75642f74616c656e742f763462657461313b74616c656e74a2020343" .
            "5453620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}
