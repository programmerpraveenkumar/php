<?php

/* 
 * this Project Copryright to Astonish Infotech software solution.
 * Copyright 2014 Astonish.
 *
 * you should not use this file without the astonish[p] License.
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * For rearranging the code contact us http://astonishinfotech.com
 */

//yyyy-mm-dd
$data='2245-13-12';
$pattern='/^[[:digit:]]{4}-[[:digit:]]{1,2}-[[:digit:]]{1,2}$/';
echo preg_match($pattern,$data);
/*
solm 1
 * $datein = '2012-11-0';

    if(preg_match('/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/', $datein)){
        echo 'good';
    }else{
        echo 'no good';
    }
 * 
 * soln 2
 * preg_match("/^[0-9]{4}-[0-1][0-9]-[0-3][0-9]$/",$date)
 * 
 * soln 3
 * 
 * $date="2012-09-12";

if (preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/",$date))
    {
        return true;
    }else{
        return false;
    }
 *  */