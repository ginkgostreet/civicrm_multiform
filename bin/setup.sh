#!/usr/bin/env bash

CALLEDPATH=`dirname $0`

# Convert to an absolute path if necessary
case "${CALLEDPATH}" in
  .*)
    CALLEDPATH="${PWD}/${CALLEDPATH}"
    ;;
esac

if [ ! -f "${CALLEDPATH}/setup.conf" ]; then
  echo
  echo "Missing configuration file. Please copy ${CALLEDPATH}/setup.conf.txt to ${CALLEDPATH}/setup.conf and edit it."
  exit 1
fi

source "${CALLEDPATH}/setup.conf"

cp ${CIVIROOT}/xml/schema/Schema.xml ${CIVIROOT}/xml/schema/Schema.xml.backup

# append extension schema to core schema
sed -i 's#</database>##' "${CIVIROOT}/xml/schema/Schema.xml"
grep "<xi:include" "${EXTROOT}/xml/schema/Schema.xml" >> "${CIVIROOT}/xml/schema/Schema.xml"
echo "</database>" >> "${CIVIROOT}/xml/schema/Schema.xml"

if [ ! -e "${CIVIROOT}/xml/schema/${EXTNAME}" ] ; then
  ln -s ${EXTROOT}/xml/schema/${EXTNAME} ${CIVIROOT}/xml/schema/${EXTNAME}
fi

cd ${CIVIROOT}/xml
php GenCode.php
# (There may be extra arguments to pass into GenCode.php; not sure)

cp -f ${CIVIROOT}/CRM/${EXTNAME}/DAO/* ${EXTROOT}/CRM/${EXTNAME}/DAO/
mv ${CIVIROOT}/xml/schema/Schema.xml.backup ${CIVIROOT}/xml/schema/Schema.xml

unlink ${CIVIROOT}/xml/schema/${EXTNAME}
rm -rf ${CIVIROOT}/CRM/${EXTNAME}

echo "Don't forget to check ${CIVIROOT}/sql/civicrm.mysql for changes."